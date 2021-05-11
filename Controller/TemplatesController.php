<?php

/**
 * TemplatesController
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a href=\"https://api.elasticemail.com/public/help\">here</a>.
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace ElasticEmail\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use ElasticEmail\Api\TemplatesApiInterface;
use ElasticEmail\Model\Template;
use ElasticEmail\Model\TemplatePayload;
use ElasticEmail\Model\TemplateScopeType;
use ElasticEmail\Model\TemplateType;

/**
 * TemplatesController Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class TemplatesController extends Controller
{

    /**
     * Operation templatesByNameDelete
     *
     * Delete Template
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function templatesByNameDeleteAction(Request $request, $name)
    {
        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $name = $this->deserialize($name, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);
            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->templatesByNameDelete($name, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation templatesByNameGet
     *
     * Load Template
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function templatesByNameGetAction(Request $request, $name)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $name = $this->deserialize($name, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->templatesByNameGet($name, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Serialized template';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation templatesByNamePut
     *
     * Update Template
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function templatesByNamePutAction(Request $request, $name)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $templatePayload = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $name = $this->deserialize($name, 'string', 'string');
            $inputFormat = $request->getMimeType($request->getContentType());
            $templatePayload = $this->deserialize($templatePayload, 'ElasticEmail\Model\TemplatePayload', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("ElasticEmail\Model\TemplatePayload");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($templatePayload, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->templatesByNamePut($name, $templatePayload, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation templatesGet
     *
     * Load Templates
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function templatesGetAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $scopeType = $request->query->get('scopeType');
        $templateTypes = $request->query->get('templateTypes');
        $limit = $request->query->get('limit');
        $offset = $request->query->get('offset');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $scopeType = $this->deserialize($scopeType, 'array<multi,ElasticEmail\Model\TemplateScopeType>', 'string');
            $templateTypes = $this->deserialize($templateTypes, 'array<multi,ElasticEmail\Model\TemplateType>', 'string');
            $limit = $this->deserialize($limit, 'int', 'string');
            $offset = $this->deserialize($offset, 'int', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\All([
            new Assert\Type("ElasticEmail\Model\TemplateScopeType"),
            new Assert\Valid(),
        ]);
        $response = $this->validate($scopeType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\All([
            new Assert\Type("ElasticEmail\Model\TemplateType"),
            new Assert\Valid(),
        ]);
        $response = $this->validate($templateTypes, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($limit, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($offset, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->templatesGet($scopeType, $templateTypes, $limit, $offset, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation templatesPost
     *
     * Add Template
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function templatesPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $templatePayload = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $inputFormat = $request->getMimeType($request->getContentType());
            $templatePayload = $this->deserialize($templatePayload, 'ElasticEmail\Model\TemplatePayload', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("ElasticEmail\Model\TemplatePayload");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($templatePayload, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->templatesPost($templatePayload, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 201:
                    $message = 'Template';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return TemplatesApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('templates');
    }
}
