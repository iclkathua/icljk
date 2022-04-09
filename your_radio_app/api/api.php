<?php

	require_once("Rest.inc.php");
	require_once("db.php");
	require_once("functions.php");

	class API extends REST {

		private $functions = NULL;
		private $db = NULL;

		public function __construct() {
			$this->db = new DB();
			$this->functions = new functions($this->db);
		}

		public function check_connection() {
			$this->functions->checkConnection();
		}

		/*
		 * ALL API Related android client -------------------------------------------------------------------------
		*/

		public function get_home() {
			$this->functions->getHome();
		}

		public function get_recent_radio() {
			$this->functions->getRecentRadio();
		}

		public function get_category_index() {
	        $this->functions->getCategoryIndex();
	    }

		public function get_category_detail() {
	        $this->functions->getCategoryDetail();
	    }

	    public function get_search_results() {
	        $this->functions->getSearchResults();
	    }

	    public function get_privacy_policy() {
	        $this->functions->getPrivacyPolicy();
	    }

	    public function get_settings() {
	        $this->functions->getSettings();
	    }

	    public function get_social() {
	        $this->functions->getSocial();
	    }

		/*
		 * End of API Transactions ----------------------------------------------------------------------------------
		*/

		public function processApi() {
			if(isset($_REQUEST['x']) && $_REQUEST['x']!=""){
				$func = strtolower(trim(str_replace("/","", $_REQUEST['x'])));
				if((int)method_exists($this,$func) > 0) {
					$this->$func();
				} else {
					echo 'processApi - method not exist';
					exit;
				}
			} else {
				echo 'processApi - method not exist';
				exit;
			}
		}

	}

	// Initiiate Library
	$api = new API;
	if (isset($_GET['home'])) {
		$api->get_home();
	} else if (isset($_GET['radios'])) {
		$api->get_recent_radio();
	} else if (isset($_GET['categories'])) {
		$api->get_category_index();
	} else if (isset($_GET['category_detail'])) {
		$api->get_category_detail();
	} else if (isset($_GET['search'])) {
		$api->get_search_results();
	} else if (isset($_GET['settings'])) {
		$api->get_settings();
	} else if (isset($_GET['social'])) {
		$api->get_social();
	} else {
		$api->processApi();
	}

?>
