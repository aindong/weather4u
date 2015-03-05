<?php namespace Acme\Weather;

class WeatherClass {

    const URL = 'api.openweathermap.org/data/2.5/weather';
    const APPID = 'd76d1f72a4a7f43d9e654b3bdc58b929';

    private $requestUrl = '';

    public function getWeatherByCity($city)
    {
        // Build the request url
        $this->requestUrl = self::URL . '?q=' . $city . '&APPID=' . self::APPID;

        // Throw the request
        $request = $this->request($this->requestUrl);

        $data = [
            'request' => $this->requestUrl,
            'data'  => $request
        ];

        return $data;
    }

    /**
     * Start the request to the api source
     *
     * @param $url
     * @return mixed
     */
    private function request($url)
    {
        // Initialize curl
        $curl = curl_init();

        // Curl options
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1, // Return the result as a string
            CURLOPT_URL => $url
        ]);

        // Execute the request
        $result = curl_exec($curl);
        // Close the connection
        curl_close($curl);

        return json_decode($result);
    }
}