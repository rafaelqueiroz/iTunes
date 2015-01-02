<?php
App::uses('HttpSocket', 'Network/Http');
/**
 * ITunes Component
 *
 * @author Rafael F Queiroz <rafaelfqf@gmail.com>
 */
class ITunesComponent extends Component {

	/**
	 * Search URL
	 *
	 * @var string
	 */
	const SEARCH_URL = 'https://itunes.apple.com/search';

	/**
	 * Lookup URL
	 *
	 * @var string
	 */
	const LOOKUP_URL = 'https://itunes.apple.com/lookup';

	/**
	 * Search API method
	 *
	 * @param string $term
	 * @param array  $params
	 * @return mixed
	 */
	public function search($term, $params=array()) {
		$params['term'] = $term;
		$request = $this->_makeRequest(self::SEARCH_URL, $params);
		if (!$request) {
			return false;
		}

		$response = $this->_parseResponse($request->body);
		return $response;
	}

	/**
	 * Lookup API method
	 *
	 * @param array $params
	 * @return mixed
	 */
	public function lookup($params) {
		$request = $this->_makeRequest(self::LOOKUP_URL, $params);
		if (!$request) {
			return false;
		}

		$response = $this->_parseResponse($request->body);
		return $response;		
	}

	/**
	 * Make a Request
	 *
	 * @param string $url
	 * @param array  $url
	 */
	protected function _makeRequest($url, $params) {
		$http = new HttpSocket();
		return $http->get($url, http_build_query($params));
	}

	/**
	 * Parse a Response
	 *
	 * @param string $body
	 * @return array
	 */
	protected function _parseResponse($body) {
		return (array) json_decode($body);
	}

}