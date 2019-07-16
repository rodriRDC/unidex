<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'unidexdb';
$CFG->dbuser    = 'unidex';
$CFG->dbpass    = 'unidex01';
$CFG->prefix    = 'udx_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://localhost/WEBS/Unidex/unidex/campus/moodle';
$CFG->dataroot  = 'C:\\xampp\\MoodleData';
$CFG->admin     = 'admin';

$CFG->wwwsite    = 'http://localhost/WEBS/Unidex/unidex/site/';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
