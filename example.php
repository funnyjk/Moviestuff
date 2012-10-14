 <?php
    function getMovieInfo($title)
    {
        $imdbId = $this->getIMDbIdFromGoogle(trim($title));
        if($imdbId === NULL){
            $arr = array();
            $arr['error'] = "No Title found in Search Results!";
            return $arr;
        }
        return $this->getMovieInfoById($imdbId);
    }

    function scrapMovieInfo($html)
    {
        $arr = array();
        $arr['title_id'] = $this->match('/<link rel="canonical" href="http:\/\/www.imdb.com\/title\/(tt\d+)\/" \/>/ms', $html, 1);
        $arr['title'] = trim($this->match('/<title>(IMDb \- )*(.*?) \(.*?<\/title>/ms', $html, 2));
        $arr['original_title'] = trim($this->match('/class="title-extra">(.*?)</ms', $html, 1));
        $arr['year'] = trim($this->match('/<title>.*?\(.*?(\d{4}).*?\).*?<\/title>/ms', $html, 1));
        $arr['rating'] = $this->match('/ratingValue">(\d.\d)</ms', $html, 1);
        $arr['genres'] = array();

?>