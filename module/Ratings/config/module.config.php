<?php
return array(
    'controllers' => array(
        'factories' => array(),
    ),
    'router' => array(
        'routes' => array(
            'ratings.rest.ratings' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ratings[/:isbn]',
                    'defaults' => array(
                        'controller' => 'Ratings\\V1\\Rest\\Ratings\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'ratings.rest.ratings',
        ),
    ),
    'zf-rpc' => array(),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Ratings\\V1\\Rest\\Ratings\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'Ratings\\V1\\Rest\\Ratings\\Controller' => array(
                0 => 'application/vnd.ratings.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Ratings\\V1\\Rest\\Ratings\\Controller' => array(
                0 => 'application/vnd.ratings.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Ratings\\V1\\Rest\\Ratings\\Controller' => array(
            'input_filter' => 'Ratings\\V1\\Rest\\Ratings\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Ratings\\V1\\Rpc\\Ratings\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'isbn',
            ),
        ),
        'Ratings\\V1\\Rest\\Ratings\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'isbn',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Ratings\\V1\\Rest\\Ratings\\RatingsResource' => 'Ratings\\V1\\Rest\\Ratings\\RatingsResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'Ratings\\V1\\Rest\\Ratings\\Controller' => array(
            'listener' => 'Ratings\\V1\\Rest\\Ratings\\RatingsResource',
            'route_name' => 'ratings.rest.ratings',
            'route_identifier_name' => 'isbn',
            'collection_name' => 'ratings',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Ratings\\V1\\Rest\\Ratings\\RatingsEntity',
            'collection_class' => 'Ratings\\V1\\Rest\\Ratings\\RatingsCollection',
            'service_name' => 'Ratings',
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Ratings\\V1\\Rest\\Ratings\\RatingsEntity' => array(
                'entity_identifier_name' => 'isbn',
                'route_name' => 'ratings.rest.ratings',
                'route_identifier_name' => 'isbn',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'Ratings\\V1\\Rest\\Ratings\\RatingsCollection' => array(
                'entity_identifier_name' => 'isbn',
                'route_name' => 'ratings.rest.ratings',
                'route_identifier_name' => 'isbn',
                'is_collection' => true,
            ),
        ),
    ),
);
