// i18next configuration (Localization)
const getEnglishTranslation = async () => {
  const response = await fetch("./locales/en/translation.json");
  const translation = { translation: await response.json() };
  return translation;
};

const initI18n = async () => {
  const en = await getEnglishTranslation();

  $(function () {
    i18next.use(i18nextBrowserLanguageDetector).init(
      {
        debug: true,
        fallbackLng: "en",
        resources: {
          en,
        },
      },
      (err, t) => {
        if (err) return console.error(err);
        jqueryI18next.init(i18next, $, { useOptionsAttr: true });
        $("body").localize();
      }
    );
  });
};

initI18n();
