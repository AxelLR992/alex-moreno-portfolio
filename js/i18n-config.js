// i18next configuration (Localization)
const getTranslation = async (locale) => {
  const response = await fetch(`./locales/${locale}/translation.json`);
  const translation = { translation: await response.json() };
  return translation;
};

const rerender = () => {
  $("body").localize();
};

const initI18n = async () => {
  const en = await getTranslation("en");
  const es = await getTranslation("es");

  $(function () {
    i18next.use(i18nextBrowserLanguageDetector).init(
      {
        debug: true,
        fallbackLng: "en",
        resources: {
          en,
          es,
        },
      },
      (err, t) => {
        if (err) return console.error(err);
        jqueryI18next.init(i18next, $, { useOptionsAttr: true });

        // Set current language as active in the selection buttons
        const currentLanguage = i18next.resolvedLanguage;
        $(".locale-change-button").each(function () {
          const btnValue = $(this).text().toLowerCase();
          if (btnValue === currentLanguage) {
            $(this).attr("class", "qrt-leng qrt-active locale-change-button");
          } else {
            $(this).attr(
              "class",
              "qrt-leng qrt-cursor-color qrt-cursor-scale locale-change-button"
            );
          }
        });

        // When a language button is clicked, remove active class from every language button, and then add it to the new selected language.
        $(".locale-change-button").click(function () {
          const chosenLng = $(this).text().toLowerCase();
          $(".locale-change-button").attr(
            "class",
            "qrt-leng qrt-cursor-color qrt-cursor-scale locale-change-button"
          );
          $(this).attr("class", "qrt-leng qrt-active locale-change-button");
          i18next.changeLanguage(chosenLng, function () {
            rerender();
          });
        });

        rerender();
      }
    );
  });
};

initI18n();
