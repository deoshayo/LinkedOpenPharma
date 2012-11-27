<?php
define("RDFAPI_INCLUDE_DIR", "rdfapi-php/api/");
include(RDFAPI_INCLUDE_DIR . "RdfAPI.php");

// Filename of an RDF document
$base="example1.rdf";

// Create a new MemModel
$model = ModelFactory::getDefaultModel();

// Load and parse document
$model->load($base);

$node = new Resource("http://dbpedia.org/resource/Aspirin");

$result = $model->find(null, null, $node);


// Output model as HTML table
$model->writeAsHtmlTable();

?>