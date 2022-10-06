<?php
class Fetch
{
    private $headers = array();
    private $base_url = "";
    private $print_response = 1; // 1 is false, 0 is true

    function add_header($header)
    {
        array_push($this->headers, $header);
    }

    function get_headers()
    {
        return $this->headers;
    }

    function set_api_key($key)
    {
        $this->add_header("api-key: " . $key);
    }

    function set_base_url($url)
    {
        $this->base_url = $url;
    }

    function get_base_url()
    {
        return $this->base_url;
    }

    function get_print_response()
    {
        return $this->print_response;
    }

    function set_print_response($bool)
    {
        $this->print_response = $bool ? 0 : 1;
    }

    /**
     * $url: string
     * $params: array("string" => "string")
     */
    function get($url, $params = array())
    {
        $query_params = "";
        if (count($params) > 0) {
            $query_params = http_build_query($params);
        }
        try {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->base_url . $url . "?" . $query_params);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->print_response);
            $result = curl_exec($curl);
            curl_close($curl);
            return $result;
        } catch (Error $e) {
            return $e->getMessage();
        }
    }
}
