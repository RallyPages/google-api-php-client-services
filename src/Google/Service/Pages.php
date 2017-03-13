<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for PlusPages (v2).
 *
 * <p>
 * Builds on top of the Google+ platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/partners/pages" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_PlusPages extends Google_Service
{
    /** View your circles and the people and pages in them. */
    const PLUS_CIRCLES_READ =
        "https://www.googleapis.com/auth/plus.circles.read";
    /** Manage your circles and add people and pages. People and pages you add to your circles will be notified. Others may see this information publicly. People you add to circles can use Hangouts with you.. */
    const PLUS_CIRCLES_WRITE =
        "https://www.googleapis.com/auth/plus.circles.write";
    /** View a list of your Google+ Collections. */
    const PLUS_COLLECTIONS_READONLY =
        "https://www.googleapis.com/auth/plus.collections.readonly";
    /** Manage your Google+ Collections. */
    const PLUS_COLLECTIONS_READWRITE =
        "https://www.googleapis.com/auth/plus.collections.readwrite";
    /** Know the list of people in your circles, your age range, and language. */
    const PLUS_LOGIN =
        "https://www.googleapis.com/auth/plus.login";
    /** Know who you are on Google. */
    const PLUS_ME =
        "https://www.googleapis.com/auth/plus.me";
    /** Send your photos and videos to Google+. */
    const PLUS_MEDIA_UPLOAD =
        "https://www.googleapis.com/auth/plus.media.upload";
    /** View your Google+ posts, comments, and stream. */
    const PLUS_STREAM_READ =
        "https://www.googleapis.com/auth/plus.stream.read";
    /** Manage your Google+ posts, comments, and stream. */
    const PLUS_STREAM_WRITE =
        "https://www.googleapis.com/auth/plus.stream.write";
    /** View your email address. */
    const USERINFO_EMAIL =
        "https://www.googleapis.com/auth/userinfo.email";
    /** View your basic profile info. */
    const USERINFO_PROFILE =
        "https://www.googleapis.com/auth/userinfo.profile";

    public $activities;
    public $circles;
    public $collections;
    public $comments;
    public $media;
    public $people;


    /**
     * Constructs the internal representation of the PlusPages service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'plusPages/v2/';
        $this->version = 'v2';
        $this->serviceName = 'plusPages';

        $this->activities = new Google_Service_PlusPages_Activities_Resource(
            $this,
            $this->serviceName,
            'activities',
            array(
                'methods' => array(
                    'disableComments' => array(
                        'path' => 'activities/{activityId}/disableComments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'enableComments' => array(
                        'path' => 'activities/{activityId}/enableComments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'activities/{activityId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'people/{userId}/activities',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'preview' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'people/{userId}/activities/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'listByCircle' => array(
                        'path' => 'circles/{circleId}/activities',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'activities/{activityId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'remove' => array(
                        'path' => 'activities/{activityId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'search' => array(
                        'path' => 'activities',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'query' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'language' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'orderBy' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'activities/{activityId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->circles = new Google_Service_PlusPages_Circles_Resource(
            $this,
            $this->serviceName,
            'circles',
            array(
                'methods' => array(
                    'addPeople' => array(
                        'path' => 'circles/{circleId}/people',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'email' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'userId' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'circles/{circleId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'people/{userId}/circles',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'people/{userId}/circles',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'circles/{circleId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'remove' => array(
                        'path' => 'circles/{circleId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'removePeople' => array(
                        'path' => 'circles/{circleId}/people',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'email' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'userId' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'circles/{circleId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->collections = new Google_Service_PlusPages_Collections_Resource(
            $this,
            $this->serviceName,
            'collections',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'collections/{collectionId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'collectionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'collections',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'people/{userId}/collections',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'collections/{collectionId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'collectionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'collections/{collectionId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'collectionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->comments = new Google_Service_PlusPages_Comments_Resource(
            $this,
            $this->serviceName,
            'comments',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'comments/{commentId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'activities/{activityId}/comments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'activities/{activityId}/comments',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'sortOrder' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'comments/{commentId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'remove' => array(
                        'path' => 'comments/{commentId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'comments/{commentId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->media = new Google_Service_PlusPages_Media_Resource(
            $this,
            $this->serviceName,
            'media',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'media/{mediaId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'mediaId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'cropImage' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'download' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'imageSize' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'people/{userId}/media/{collection}',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->people = new Google_Service_PlusPages_People_Resource(
            $this,
            $this->serviceName,
            'people',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'people/{userId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'people/{userId}/people/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'listByActivity' => array(
                        'path' => 'activities/{activityId}/people/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'listByCircle' => array(
                        'path' => 'circles/{circleId}/people',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'circleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'people/{userId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'search' => array(
                        'path' => 'people',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'query' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'language' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'onBehalfOf' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'people/{userId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $activities = $plusPagesService->activities;
 *  </code>
 */
class Google_Service_PlusPages_Activities_Resource extends Google_Service_Resource
{

    /**
     * Disable comments on an activity so that viewers may not comment.
     * (activities.disableComments)
     *
     * @param string $activityId The ID of the activity for which to disable
     * comments.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Activity
     */
    public function disableComments($activityId, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('disableComments', array($params), "Google_Service_PlusPages_Activity");
    }

    /**
     * Enable comments on an activity so that viewers may comment.
     * (activities.enableComments)
     *
     * @param string $activityId The ID of the activity for which to enable
     * comments.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Activity
     */
    public function enableComments($activityId, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('enableComments', array($params), "Google_Service_PlusPages_Activity");
    }

    /**
     * Get an activity. (activities.get)
     *
     * @param string $activityId The ID of the activity to get.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Activity
     */
    public function get($activityId, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Activity");
    }

    /**
     * Create a new activity for the authenticated user. (activities.insert)
     *
     * @param string $userId The ID of the user to create the activity on behalf of.
     * Its value should be "me", to indicate the authenticated user.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool preview If "true", extract the potential media attachments
     * for a URL. The response will include all possible attachments for a URL,
     * including video, photos, and articles based on the content of the page.
     * @return Google_Service_PlusPages_Activity
     */
    public function insert($userId, Google_Service_PlusPages_Activity $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Activity");
    }

    /**
     * List all of the activities in the specified collection for a particular user.
     * (activities.listActivities)
     *
     * @param string $userId The ID of the user to get activities for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of activities to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_ActivityFeed
     */
    public function listActivities($userId, $collection, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_PlusPages_ActivityFeed");
    }

    /**
     * List all of the activities authored by members of the specified circle.
     * (activities.listByCircle)
     *
     * @param string $circleId The ID of the circle to get activities for.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of activities to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_ActivityFeed
     */
    public function listByCircle($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('listByCircle', array($params), "Google_Service_PlusPages_ActivityFeed");
    }

    /**
     * Update the content and attachments of an activity. This method supports patch
     * semantics. (activities.patch)
     *
     * @param string $activityId The ID of the activity to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Activity
     */
    public function patch($activityId, $onBehalfOf, Google_Service_PlusPages_Activity $postBody, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_PlusPages_Activity");
    }

    /**
     * Delete an activity. (activities.remove)
     *
     * @param string $activityId The ID of the activity to delete.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     */
    public function remove($activityId, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }

    /**
     * Search public activities. (activities.search)
     *
     * @param string $query Full-text search query string.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language Specify the preferred language to search with. See
     * search language codes for available values.
     * @opt_param string maxResults The maximum number of activities to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string orderBy Specifies how to order search results.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response. This
     * token can be of any length.
     * @return Google_Service_PlusPages_ActivityFeed
     */
    public function search($query, $optParams = array())
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_PlusPages_ActivityFeed");
    }

    /**
     * Update the content and attachments of an activity. (activities.update)
     *
     * @param string $activityId The ID of the activity to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Activity
     */
    public function update($activityId, $onBehalfOf, Google_Service_PlusPages_Activity $postBody, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_PlusPages_Activity");
    }
}

/**
 * The "circles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $circles = $plusPagesService->circles;
 *  </code>
 */
class Google_Service_PlusPages_Circles_Resource extends Google_Service_Resource
{

    /**
     * Add a person to a circle. Google+ limits certain circle operations, including
     * the number of circle adds. Learn More. (circles.addPeople)
     *
     * @param string $circleId The ID of the circle to add the person to.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string email Email of the people to add to the circle. Optional,
     * can be repeated.
     * @opt_param string userId IDs of the people to add to the circle. Optional,
     * can be repeated.
     * @return Google_Service_PlusPages_Circle
     */
    public function addPeople($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('addPeople', array($params), "Google_Service_PlusPages_Circle");
    }

    /**
     * Get a circle. (circles.get)
     *
     * @param string $circleId The ID of the circle to get.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Circle
     */
    public function get($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Circle");
    }

    /**
     * Create a new circle for the authenticated user. (circles.insert)
     *
     * @param string $userId The ID of the user to create the circle on behalf of.
     * The value "me" can be used to indicate the authenticated user.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Circle
     */
    public function insert($userId, Google_Service_PlusPages_Circle $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Circle");
    }

    /**
     * List all of the circles for a user. (circles.listCircles)
     *
     * @param string $userId The ID of the user to get circles for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of circles to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_CircleFeed
     */
    public function listCircles($userId, $optParams = array())
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_PlusPages_CircleFeed");
    }

    /**
     * Update a circle's description. This method supports patch semantics.
     * (circles.patch)
     *
     * @param string $circleId The ID of the circle to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Circle
     */
    public function patch($circleId, $onBehalfOf, Google_Service_PlusPages_Circle $postBody, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_PlusPages_Circle");
    }

    /**
     * Delete a circle. (circles.remove)
     *
     * @param string $circleId The ID of the circle to delete.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     */
    public function remove($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }

    /**
     * Remove a person from a circle. (circles.removePeople)
     *
     * @param string $circleId The ID of the circle to remove the person from.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string email Email of the people to add to the circle. Optional,
     * can be repeated.
     * @opt_param string userId IDs of the people to remove from the circle.
     * Optional, can be repeated.
     */
    public function removePeople($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('removePeople', array($params));
    }

    /**
     * Update a circle's description. (circles.update)
     *
     * @param string $circleId The ID of the circle to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Circle
     */
    public function update($circleId, $onBehalfOf, Google_Service_PlusPages_Circle $postBody, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_PlusPages_Circle");
    }
}

/**
 * The "collections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $collections = $plusPagesService->collections;
 *  </code>
 */
class Google_Service_PlusPages_Collections_Resource extends Google_Service_Resource
{

    /**
     * Get a collection (collections.get)
     *
     * @param string $collectionId The ID of the activity to get.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @return Google_Service_PlusPages_Collection
     */
    public function get($collectionId, $optParams = array())
    {
        $params = array('collectionId' => $collectionId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Collection");
    }

    /**
     * Create a new collection for the authenticated user. (collections.insert)
     *
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @return Google_Service_PlusPages_Collection
     */
    public function insert(Google_Service_PlusPages_Collection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Collection");
    }

    /**
     * List all of the collections for a particular user.
     * (collections.listCollections)
     *
     * @param string $userId The ID of the user to get collections for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of collections to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_CollectionFeed
     */
    public function listCollections($userId, $optParams = array())
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_PlusPages_CollectionFeed");
    }

    /**
     * Patch a collection. (collections.patch)
     *
     * @param string $collectionId The ID of the collection to patch.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Collection
     */
    public function patch($collectionId, $onBehalfOf, Google_Service_PlusPages_Collection $postBody, $optParams = array())
    {
        $params = array('collectionId' => $collectionId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_PlusPages_Collection");
    }

    /**
     * Update a collection. (collections.update)
     *
     * @param string $collectionId The ID of the collection to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Collection
     */
    public function update($collectionId, $onBehalfOf, Google_Service_PlusPages_Collection $postBody, $optParams = array())
    {
        $params = array('collectionId' => $collectionId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_PlusPages_Collection");
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $comments = $plusPagesService->comments;
 *  </code>
 */
class Google_Service_PlusPages_Comments_Resource extends Google_Service_Resource
{

    /**
     * Get a comment. (comments.get)
     *
     * @param string $commentId The ID of the comment to get.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Comment
     */
    public function get($commentId, $onBehalfOf, $optParams = array())
    {
        $params = array('commentId' => $commentId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Comment");
    }

    /**
     * Create a new comment in reply to an activity. (comments.insert)
     *
     * @param string $activityId The ID of the activity to reply to.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Comment
     */
    public function insert($activityId, $onBehalfOf, Google_Service_PlusPages_Comment $postBody, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Comment");
    }

    /**
     * List all of the comments for an activity. (comments.listComments)
     *
     * @param string $activityId The ID of the activity to get comments for.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of comments to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string sortOrder The order in which to sort the list of comments.
     * @return Google_Service_PlusPages_CommentFeed
     */
    public function listComments($activityId, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_PlusPages_CommentFeed");
    }

    /**
     * Update a comment. This method supports patch semantics. (comments.patch)
     *
     * @param string $commentId The ID of the comment to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Comment
     */
    public function patch($commentId, $onBehalfOf, Google_Service_PlusPages_Comment $postBody, $optParams = array())
    {
        $params = array('commentId' => $commentId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_PlusPages_Comment");
    }

    /**
     * Delete a comment. (comments.remove)
     *
     * @param string $commentId The ID of the comment to delete.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     */
    public function remove($commentId, $onBehalfOf, $optParams = array())
    {
        $params = array('commentId' => $commentId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }

    /**
     * Update a comment. (comments.update)
     *
     * @param string $commentId The ID of the comment to update.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Comment
     */
    public function update($commentId, $onBehalfOf, Google_Service_PlusPages_Comment $postBody, $optParams = array())
    {
        $params = array('commentId' => $commentId, 'onBehalfOf' => $onBehalfOf, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_PlusPages_Comment");
    }
}

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $media = $plusPagesService->media;
 *  </code>
 */
class Google_Service_PlusPages_Media_Resource extends Google_Service_Resource
{

    /**
     * Get a media item. (media.get)
     *
     * @param string $mediaId The ID of the media to get.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool cropImage Crop the image. mediaUrl will contain a square
     * cropped image with the dimensions of imageSize.
     * @opt_param bool download When true mediaUrl contains a downloadable link to
     * the media.
     * @opt_param int imageSize The longer of width or height (in pixels) of the
     * image in mediaUrl. The aspect ratio of the image is preserved. If cropImage
     * is true imageSize is the dimensions of the cropped image. The default is 512.
     * @return Google_Service_PlusPages_Media
     */
    public function get($mediaId, $onBehalfOf, $optParams = array())
    {
        $params = array('mediaId' => $mediaId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Media");
    }

    /**
     * Add a new media item to an album. The current upload size limitations are
     * 36MB for a photo and 1GB for a video. Uploads do not count against quota if
     * photos are less than 2048 pixels on their longest side or videos are less
     * than 15 minutes in length. (media.insert)
     *
     * @param string $userId The ID of the user to create the activity on behalf of.
     * @param string $collection
     * @param Google_Media $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Media
     */
    public function insert($userId, $collection, Google_Service_PlusPages_Media $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Media");
    }
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_Service_PlusPages(...);
 *   $people = $plusPagesService->people;
 *  </code>
 */
class Google_Service_PlusPages_People_Resource extends Google_Service_Resource
{

    /**
     * Get a person's profile. (people.get)
     *
     * @param string $userId The ID of the person to get the profile for. The
     * special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @return Google_Service_PlusPages_Person
     */
    public function get($userId, $optParams = array())
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Person");
    }

    /**
     * List all of the people in the specified collection. (people.listPeople)
     *
     * @param string $userId Get the collection of people for the person identified.
     * Use "me" to indicate the authenticated user.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_PeopleFeed
     */
    public function listPeople($userId, $collection, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_PlusPages_PeopleFeed");
    }

    /**
     * List all of the people in the specified collection for a particular activity.
     * (people.listByActivity)
     *
     * @param string $activityId The ID of the activity to get the list of people
     * for.
     * @param string $collection The collection of people to list.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_PeopleFeed
     */
    public function listByActivity($activityId, $collection, $onBehalfOf, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'collection' => $collection, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('listByActivity', array($params), "Google_Service_PlusPages_PeopleFeed");
    }

    /**
     * List all of the people who are members of a circle. (people.listByCircle)
     *
     * @param string $circleId The ID of the circle to get the members of.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, modulo authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @return Google_Service_PlusPages_PeopleFeed
     */
    public function listByCircle($circleId, $onBehalfOf, $optParams = array())
    {
        $params = array('circleId' => $circleId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('listByCircle', array($params), "Google_Service_PlusPages_PeopleFeed");
    }

    /**
     * Update the profile of a person or Google+ Page. The profile picture is the
     * only thing that can currently be updated, by setting image.id to an existing
     * image's ID. This method supports patch semantics. (people.patch)
     *
     * @param string $userId The ID of the person or Google+ Page to update the
     * profile for. The special value "me" can be used to indicate the authenticated
     * user.
     * @param Google_Person $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Person
     */
    public function patch($userId, Google_Service_PlusPages_Person $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_PlusPages_Person");
    }

    /**
     * Search all public profiles. (people.search)
     *
     * @param string $query Specify a query string for full text search of public
     * text in all profiles.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language Specify the preferred language to search with. See
     * search language codes for available values.
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string onBehalfOf The Google+ Page which the user wants to act on
     * behalf of. If set, the action is executed on behalf of the Google+ Page
     * indicated, with authorization checks.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response. This
     * token can be of any length.
     * @return Google_Service_PlusPages_PeopleFeed
     */
    public function search($query, $optParams = array())
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_PlusPages_PeopleFeed");
    }

    /**
     * Update the profile of a person or Google+ Page. The profile picture is the
     * only thing that can currently be updated, by setting image.id to an existing
     * image's ID. (people.update)
     *
     * @param string $userId The ID of the person or Google+ Page to update the
     * profile for. The special value "me" can be used to indicate the authenticated
     * user.
     * @param Google_Person $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PlusPages_Person
     */
    public function update($userId, Google_Service_PlusPages_Person $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_PlusPages_Person");
    }
}




class Google_Service_PlusPages_Acl extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $description;
    protected $itemsType = 'Google_Service_PlusPages_PlusPagesAclentryResource';
    protected $itemsDataType = 'array';
    public $kind;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}

class Google_Service_PlusPages_Activity extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $accessType = 'Google_Service_PlusPages_Acl';
    protected $accessDataType = '';
    protected $actorType = 'Google_Service_PlusPages_ActivityActor';
    protected $actorDataType = '';
    public $address;
    public $annotation;
    public $crosspostSource;
    public $etag;
    public $geocode;
    public $id;
    public $kind;
    protected $locationType = 'Google_Service_PlusPages_Place';
    protected $locationDataType = '';
    protected $objectType = 'Google_Service_PlusPages_ActivityObject';
    protected $objectDataType = '';
    public $placeId;
    public $placeName;
    protected $providerType = 'Google_Service_PlusPages_ActivityProvider';
    protected $providerDataType = '';
    public $published;
    public $radius;
    public $title;
    public $updated;
    public $url;
    public $verb;


    public function setAccess(Google_Service_PlusPages_Acl $access)
    {
        $this->access = $access;
    }
    public function getAccess()
    {
        return $this->access;
    }
    public function setActor(Google_Service_PlusPages_ActivityActor $actor)
    {
        $this->actor = $actor;
    }
    public function getActor()
    {
        return $this->actor;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
    }
    public function getAnnotation()
    {
        return $this->annotation;
    }
    public function setCrosspostSource($crosspostSource)
    {
        $this->crosspostSource = $crosspostSource;
    }
    public function getCrosspostSource()
    {
        return $this->crosspostSource;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;
    }
    public function getGeocode()
    {
        return $this->geocode;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLocation(Google_Service_PlusPages_Place $location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setObject(Google_Service_PlusPages_ActivityObject $object)
    {
        $this->object = $object;
    }
    public function getObject()
    {
        return $this->object;
    }
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }
    public function getPlaceId()
    {
        return $this->placeId;
    }
    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;
    }
    public function getPlaceName()
    {
        return $this->placeName;
    }
    public function setProvider(Google_Service_PlusPages_ActivityProvider $provider)
    {
        $this->provider = $provider;
    }
    public function getProvider()
    {
        return $this->provider;
    }
    public function setPublished($published)
    {
        $this->published = $published;
    }
    public function getPublished()
    {
        return $this->published;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }
    public function getVerb()
    {
        return $this->verb;
    }
}

class Google_Service_PlusPages_ActivityActor extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $clientSpecificActorInfoType = 'Google_Service_PlusPages_ActivityActorClientSpecificActorInfo';
    protected $clientSpecificActorInfoDataType = '';
    public $displayName;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_ActivityActorImage';
    protected $imageDataType = '';
    protected $nameType = 'Google_Service_PlusPages_ActivityActorName';
    protected $nameDataType = '';
    public $url;
    protected $verificationType = 'Google_Service_PlusPages_ActivityActorVerification';
    protected $verificationDataType = '';


    public function setClientSpecificActorInfo(Google_Service_PlusPages_ActivityActorClientSpecificActorInfo $clientSpecificActorInfo)
    {
        $this->clientSpecificActorInfo = $clientSpecificActorInfo;
    }
    public function getClientSpecificActorInfo()
    {
        return $this->clientSpecificActorInfo;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_ActivityActorImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setName(Google_Service_PlusPages_ActivityActorName $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setVerification(Google_Service_PlusPages_ActivityActorVerification $verification)
    {
        $this->verification = $verification;
    }
    public function getVerification()
    {
        return $this->verification;
    }
}

class Google_Service_PlusPages_ActivityActorClientSpecificActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $youtubeActorInfoType = 'Google_Service_PlusPages_ActivityActorClientSpecificActorInfoYoutubeActorInfo';
    protected $youtubeActorInfoDataType = '';


    public function setYoutubeActorInfo(Google_Service_PlusPages_ActivityActorClientSpecificActorInfoYoutubeActorInfo $youtubeActorInfo)
    {
        $this->youtubeActorInfo = $youtubeActorInfo;
    }
    public function getYoutubeActorInfo()
    {
        return $this->youtubeActorInfo;
    }
}

class Google_Service_PlusPages_ActivityActorClientSpecificActorInfoYoutubeActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $channelId;


    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }
    public function getChannelId()
    {
        return $this->channelId;
    }
}

class Google_Service_PlusPages_ActivityActorImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityActorName extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $familyName;
    public $givenName;


    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }
    public function getFamilyName()
    {
        return $this->familyName;
    }
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }
    public function getGivenName()
    {
        return $this->givenName;
    }
}

class Google_Service_PlusPages_ActivityActorVerification extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $adHocVerified;


    public function setAdHocVerified($adHocVerified)
    {
        $this->adHocVerified = $adHocVerified;
    }
    public function getAdHocVerified()
    {
        return $this->adHocVerified;
    }
}

class Google_Service_PlusPages_ActivityFeed extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $etag;
    public $id;
    protected $itemsType = 'Google_Service_PlusPages_Activity';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $updated;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }
    public function getNextLink()
    {
        return $this->nextLink;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
}

class Google_Service_PlusPages_ActivityObject extends Google_Collection
{
    protected $collection_key = 'attachments';
    protected $internal_gapi_mappings = array(
    );
    protected $actorType = 'Google_Service_PlusPages_ActivityObjectActor';
    protected $actorDataType = '';
    protected $attachmentsType = 'Google_Service_PlusPages_ActivityObjectAttachments';
    protected $attachmentsDataType = 'array';
    public $content;
    public $id;
    public $objectType;
    public $originalContent;
    protected $plusonersType = 'Google_Service_PlusPages_ActivityObjectPlusoners';
    protected $plusonersDataType = '';
    protected $repliesType = 'Google_Service_PlusPages_ActivityObjectReplies';
    protected $repliesDataType = '';
    protected $resharersType = 'Google_Service_PlusPages_ActivityObjectResharers';
    protected $resharersDataType = '';
    protected $statusForViewerType = 'Google_Service_PlusPages_ActivityObjectStatusForViewer';
    protected $statusForViewerDataType = '';
    public $url;


    public function setActor(Google_Service_PlusPages_ActivityObjectActor $actor)
    {
        $this->actor = $actor;
    }
    public function getActor()
    {
        return $this->actor;
    }
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }
    public function getAttachments()
    {
        return $this->attachments;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
    public function getObjectType()
    {
        return $this->objectType;
    }
    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }
    public function getOriginalContent()
    {
        return $this->originalContent;
    }
    public function setPlusoners(Google_Service_PlusPages_ActivityObjectPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }
    public function getPlusoners()
    {
        return $this->plusoners;
    }
    public function setReplies(Google_Service_PlusPages_ActivityObjectReplies $replies)
    {
        $this->replies = $replies;
    }
    public function getReplies()
    {
        return $this->replies;
    }
    public function setResharers(Google_Service_PlusPages_ActivityObjectResharers $resharers)
    {
        $this->resharers = $resharers;
    }
    public function getResharers()
    {
        return $this->resharers;
    }
    public function setStatusForViewer(Google_Service_PlusPages_ActivityObjectStatusForViewer $statusForViewer)
    {
        $this->statusForViewer = $statusForViewer;
    }
    public function getStatusForViewer()
    {
        return $this->statusForViewer;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectActor extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $clientSpecificActorInfoType = 'Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfo';
    protected $clientSpecificActorInfoDataType = '';
    public $displayName;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_ActivityObjectActorImage';
    protected $imageDataType = '';
    public $url;
    protected $verificationType = 'Google_Service_PlusPages_ActivityObjectActorVerification';
    protected $verificationDataType = '';


    public function setClientSpecificActorInfo(Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfo $clientSpecificActorInfo)
    {
        $this->clientSpecificActorInfo = $clientSpecificActorInfo;
    }
    public function getClientSpecificActorInfo()
    {
        return $this->clientSpecificActorInfo;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_ActivityObjectActorImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setVerification(Google_Service_PlusPages_ActivityObjectActorVerification $verification)
    {
        $this->verification = $verification;
    }
    public function getVerification()
    {
        return $this->verification;
    }
}

class Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $youtubeActorInfoType = 'Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfoYoutubeActorInfo';
    protected $youtubeActorInfoDataType = '';


    public function setYoutubeActorInfo(Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfoYoutubeActorInfo $youtubeActorInfo)
    {
        $this->youtubeActorInfo = $youtubeActorInfo;
    }
    public function getYoutubeActorInfo()
    {
        return $this->youtubeActorInfo;
    }
}

class Google_Service_PlusPages_ActivityObjectActorClientSpecificActorInfoYoutubeActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $channelId;


    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }
    public function getChannelId()
    {
        return $this->channelId;
    }
}

class Google_Service_PlusPages_ActivityObjectActorImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectActorVerification extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $adHocVerified;


    public function setAdHocVerified($adHocVerified)
    {
        $this->adHocVerified = $adHocVerified;
    }
    public function getAdHocVerified()
    {
        return $this->adHocVerified;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachments extends Google_Collection
{
    protected $collection_key = 'thumbnails';
    protected $internal_gapi_mappings = array(
    );
    public $content;
    public $displayName;
    protected $embedType = 'Google_Service_PlusPages_ActivityObjectAttachmentsEmbed';
    protected $embedDataType = '';
    protected $fullImageType = 'Google_Service_PlusPages_ActivityObjectAttachmentsFullImage';
    protected $fullImageDataType = '';
    public $id;
    protected $imageType = 'Google_Service_PlusPages_ActivityObjectAttachmentsImage';
    protected $imageDataType = '';
    public $objectType;
    protected $previewThumbnailsType = 'Google_Service_PlusPages_ActivityObjectAttachmentsPreviewThumbnails';
    protected $previewThumbnailsDataType = 'array';
    protected $thumbnailsType = 'Google_Service_PlusPages_ActivityObjectAttachmentsThumbnails';
    protected $thumbnailsDataType = 'array';
    public $url;


    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setEmbed(Google_Service_PlusPages_ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }
    public function getEmbed()
    {
        return $this->embed;
    }
    public function setFullImage(Google_Service_PlusPages_ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }
    public function getFullImage()
    {
        return $this->fullImage;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
    public function getObjectType()
    {
        return $this->objectType;
    }
    public function setPreviewThumbnails($previewThumbnails)
    {
        $this->previewThumbnails = $previewThumbnails;
    }
    public function getPreviewThumbnails()
    {
        return $this->previewThumbnails;
    }
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }
    public function getThumbnails()
    {
        return $this->thumbnails;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsEmbed extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $type;
    public $url;


    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsFullImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $height;
    public $type;
    public $url;
    public $width;


    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $height;
    public $type;
    public $url;
    public $width;


    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsPreviewThumbnails extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsThumbnails extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $description;
    protected $imageType = 'Google_Service_PlusPages_ActivityObjectAttachmentsThumbnailsImage';
    protected $imageDataType = '';
    public $url;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setImage(Google_Service_PlusPages_ActivityObjectAttachmentsThumbnailsImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_ActivityObjectAttachmentsThumbnailsImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $height;
    public $type;
    public $url;
    public $width;


    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_PlusPages_ActivityObjectPlusoners extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $selfLink;
    public $totalItems;


    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_ActivityObjectReplies extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $selfLink;
    public $totalItems;


    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_ActivityObjectResharers extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $selfLink;
    public $totalItems;


    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_ActivityObjectStatusForViewer extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $canComment;
    public $canPlusone;
    public $canUpdate;
    public $isPlusOned;
    public $resharingDisabled;


    public function setCanComment($canComment)
    {
        $this->canComment = $canComment;
    }
    public function getCanComment()
    {
        return $this->canComment;
    }
    public function setCanPlusone($canPlusone)
    {
        $this->canPlusone = $canPlusone;
    }
    public function getCanPlusone()
    {
        return $this->canPlusone;
    }
    public function setCanUpdate($canUpdate)
    {
        $this->canUpdate = $canUpdate;
    }
    public function getCanUpdate()
    {
        return $this->canUpdate;
    }
    public function setIsPlusOned($isPlusOned)
    {
        $this->isPlusOned = $isPlusOned;
    }
    public function getIsPlusOned()
    {
        return $this->isPlusOned;
    }
    public function setResharingDisabled($resharingDisabled)
    {
        $this->resharingDisabled = $resharingDisabled;
    }
    public function getResharingDisabled()
    {
        return $this->resharingDisabled;
    }
}

class Google_Service_PlusPages_ActivityProvider extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $title;


    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

class Google_Service_PlusPages_Circle extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $description;
    public $displayName;
    public $etag;
    public $id;
    public $kind;
    protected $peopleType = 'Google_Service_PlusPages_CirclePeople';
    protected $peopleDataType = '';
    public $selfLink;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPeople(Google_Service_PlusPages_CirclePeople $people)
    {
        $this->people = $people;
    }
    public function getPeople()
    {
        return $this->people;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

class Google_Service_PlusPages_CircleFeed extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $etag;
    protected $itemsType = 'Google_Service_PlusPages_Circle';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $totalItems;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }
    public function getNextLink()
    {
        return $this->nextLink;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_CirclePeople extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $totalItems;


    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_Collection extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $accessType = 'Google_Service_PlusPages_Acl';
    protected $accessDataType = '';
    public $coverPhotoId;
    public $coverPhotoUrl;
    public $etag;
    public $id;
    public $kind;
    public $name;
    public $tagline;


    public function setAccess(Google_Service_PlusPages_Acl $access)
    {
        $this->access = $access;
    }
    public function getAccess()
    {
        return $this->access;
    }
    public function setCoverPhotoId($coverPhotoId)
    {
        $this->coverPhotoId = $coverPhotoId;
    }
    public function getCoverPhotoId()
    {
        return $this->coverPhotoId;
    }
    public function setCoverPhotoUrl($coverPhotoUrl)
    {
        $this->coverPhotoUrl = $coverPhotoUrl;
    }
    public function getCoverPhotoUrl()
    {
        return $this->coverPhotoUrl;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }
    public function getTagline()
    {
        return $this->tagline;
    }
}

class Google_Service_PlusPages_CollectionFeed extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $etag;
    protected $itemsType = 'Google_Service_PlusPages_Collection';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    public $title;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }
    public function getNextLink()
    {
        return $this->nextLink;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

class Google_Service_PlusPages_Comment extends Google_Collection
{
    protected $collection_key = 'inReplyTo';
    protected $internal_gapi_mappings = array(
    );
    protected $actorType = 'Google_Service_PlusPages_CommentActor';
    protected $actorDataType = '';
    public $etag;
    public $id;
    protected $inReplyToType = 'Google_Service_PlusPages_CommentInReplyTo';
    protected $inReplyToDataType = 'array';
    public $kind;
    protected $objectType = 'Google_Service_PlusPages_CommentObject';
    protected $objectDataType = '';
    protected $plusonersType = 'Google_Service_PlusPages_CommentPlusoners';
    protected $plusonersDataType = '';
    public $published;
    public $selfLink;
    public $updated;
    public $verb;


    public function setActor(Google_Service_PlusPages_CommentActor $actor)
    {
        $this->actor = $actor;
    }
    public function getActor()
    {
        return $this->actor;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
    }
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setObject(Google_Service_PlusPages_CommentObject $object)
    {
        $this->object = $object;
    }
    public function getObject()
    {
        return $this->object;
    }
    public function setPlusoners(Google_Service_PlusPages_CommentPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }
    public function getPlusoners()
    {
        return $this->plusoners;
    }
    public function setPublished($published)
    {
        $this->published = $published;
    }
    public function getPublished()
    {
        return $this->published;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }
    public function getVerb()
    {
        return $this->verb;
    }
}

class Google_Service_PlusPages_CommentActor extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $clientSpecificActorInfoType = 'Google_Service_PlusPages_CommentActorClientSpecificActorInfo';
    protected $clientSpecificActorInfoDataType = '';
    public $displayName;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_CommentActorImage';
    protected $imageDataType = '';
    public $url;
    protected $verificationType = 'Google_Service_PlusPages_CommentActorVerification';
    protected $verificationDataType = '';


    public function setClientSpecificActorInfo(Google_Service_PlusPages_CommentActorClientSpecificActorInfo $clientSpecificActorInfo)
    {
        $this->clientSpecificActorInfo = $clientSpecificActorInfo;
    }
    public function getClientSpecificActorInfo()
    {
        return $this->clientSpecificActorInfo;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_CommentActorImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setVerification(Google_Service_PlusPages_CommentActorVerification $verification)
    {
        $this->verification = $verification;
    }
    public function getVerification()
    {
        return $this->verification;
    }
}

class Google_Service_PlusPages_CommentActorClientSpecificActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $youtubeActorInfoType = 'Google_Service_PlusPages_CommentActorClientSpecificActorInfoYoutubeActorInfo';
    protected $youtubeActorInfoDataType = '';


    public function setYoutubeActorInfo(Google_Service_PlusPages_CommentActorClientSpecificActorInfoYoutubeActorInfo $youtubeActorInfo)
    {
        $this->youtubeActorInfo = $youtubeActorInfo;
    }
    public function getYoutubeActorInfo()
    {
        return $this->youtubeActorInfo;
    }
}

class Google_Service_PlusPages_CommentActorClientSpecificActorInfoYoutubeActorInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $channelId;


    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }
    public function getChannelId()
    {
        return $this->channelId;
    }
}

class Google_Service_PlusPages_CommentActorImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_CommentActorVerification extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $adHocVerified;


    public function setAdHocVerified($adHocVerified)
    {
        $this->adHocVerified = $adHocVerified;
    }
    public function getAdHocVerified()
    {
        return $this->adHocVerified;
    }
}

class Google_Service_PlusPages_CommentFeed extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $etag;
    public $id;
    protected $itemsType = 'Google_Service_PlusPages_Comment';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $title;
    public $updated;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }
    public function getNextLink()
    {
        return $this->nextLink;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
}

class Google_Service_PlusPages_CommentInReplyTo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $id;
    public $url;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_CommentObject extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $content;
    public $objectType;
    public $originalContent;


    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
    public function getObjectType()
    {
        return $this->objectType;
    }
    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }
    public function getOriginalContent()
    {
        return $this->originalContent;
    }
}

class Google_Service_PlusPages_CommentPlusoners extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $totalItems;


    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_Media extends Google_Collection
{
    protected $collection_key = 'streams';
    protected $internal_gapi_mappings = array(
    );
    protected $authorType = 'Google_Service_PlusPages_MediaAuthor';
    protected $authorDataType = '';
    public $displayName;
    public $etag;
    protected $exifType = 'Google_Service_PlusPages_MediaExif';
    protected $exifDataType = '';
    public $height;
    public $id;
    public $kind;
    public $mediaCreatedTime;
    public $mediaUrl;
    public $published;
    public $sizeBytes;
    protected $streamsType = 'Google_Service_PlusPages_Videostream';
    protected $streamsDataType = 'array';
    public $summary;
    public $updated;
    public $url;
    public $videoDuration;
    public $videoStatus;
    public $width;


    public function setAuthor(Google_Service_PlusPages_MediaAuthor $author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setExif(Google_Service_PlusPages_MediaExif $exif)
    {
        $this->exif = $exif;
    }
    public function getExif()
    {
        return $this->exif;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMediaCreatedTime($mediaCreatedTime)
    {
        $this->mediaCreatedTime = $mediaCreatedTime;
    }
    public function getMediaCreatedTime()
    {
        return $this->mediaCreatedTime;
    }
    public function setMediaUrl($mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;
    }
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }
    public function setPublished($published)
    {
        $this->published = $published;
    }
    public function getPublished()
    {
        return $this->published;
    }
    public function setSizeBytes($sizeBytes)
    {
        $this->sizeBytes = $sizeBytes;
    }
    public function getSizeBytes()
    {
        return $this->sizeBytes;
    }
    public function setStreams($streams)
    {
        $this->streams = $streams;
    }
    public function getStreams()
    {
        return $this->streams;
    }
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    public function getSummary()
    {
        return $this->summary;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setVideoDuration($videoDuration)
    {
        $this->videoDuration = $videoDuration;
    }
    public function getVideoDuration()
    {
        return $this->videoDuration;
    }
    public function setVideoStatus($videoStatus)
    {
        $this->videoStatus = $videoStatus;
    }
    public function getVideoStatus()
    {
        return $this->videoStatus;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_PlusPages_MediaAuthor extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $displayName;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_MediaAuthorImage';
    protected $imageDataType = '';
    public $url;


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_MediaAuthorImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_MediaAuthorImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_MediaExif extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $time;


    public function setTime($time)
    {
        $this->time = $time;
    }
    public function getTime()
    {
        return $this->time;
    }
}

class Google_Service_PlusPages_PeopleFeed extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array(
    );
    public $etag;
    protected $itemsType = 'Google_Service_PlusPages_Person';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $totalItems;


    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

class Google_Service_PlusPages_Person extends Google_Collection
{
    protected $collection_key = 'urls';
    protected $internal_gapi_mappings = array(
    );
    public $aboutMe;
    public $birthday;
    public $braggingRights;
    public $circledByCount;
    protected $coverType = 'Google_Service_PlusPages_PersonCover';
    protected $coverDataType = '';
    public $currentLocation;
    public $displayName;
    public $domain;
    protected $emailsType = 'Google_Service_PlusPages_PersonEmails';
    protected $emailsDataType = 'array';
    public $etag;
    public $gender;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_PersonImage';
    protected $imageDataType = '';
    public $isPlusUser;
    public $kind;
    protected $nameType = 'Google_Service_PlusPages_PersonName';
    protected $nameDataType = '';
    public $nickname;
    public $objectType;
    public $occupation;
    protected $organizationsType = 'Google_Service_PlusPages_PersonOrganizations';
    protected $organizationsDataType = 'array';
    protected $placesLivedType = 'Google_Service_PlusPages_PersonPlacesLived';
    protected $placesLivedDataType = 'array';
    public $plusOneCount;
    public $relationshipStatus;
    public $skills;
    public $tagline;
    public $url;
    protected $urlsType = 'Google_Service_PlusPages_PersonUrls';
    protected $urlsDataType = 'array';
    public $verified;


    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }
    public function getAboutMe()
    {
        return $this->aboutMe;
    }
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function setBraggingRights($braggingRights)
    {
        $this->braggingRights = $braggingRights;
    }
    public function getBraggingRights()
    {
        return $this->braggingRights;
    }
    public function setCircledByCount($circledByCount)
    {
        $this->circledByCount = $circledByCount;
    }
    public function getCircledByCount()
    {
        return $this->circledByCount;
    }
    public function setCover(Google_Service_PlusPages_PersonCover $cover)
    {
        $this->cover = $cover;
    }
    public function getCover()
    {
        return $this->cover;
    }
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }
    public function getDomain()
    {
        return $this->domain;
    }
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }
    public function getEmails()
    {
        return $this->emails;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_PersonImage $image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setIsPlusUser($isPlusUser)
    {
        $this->isPlusUser = $isPlusUser;
    }
    public function getIsPlusUser()
    {
        return $this->isPlusUser;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName(Google_Service_PlusPages_PersonName $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
    public function getObjectType()
    {
        return $this->objectType;
    }
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }
    public function getOccupation()
    {
        return $this->occupation;
    }
    public function setOrganizations($organizations)
    {
        $this->organizations = $organizations;
    }
    public function getOrganizations()
    {
        return $this->organizations;
    }
    public function setPlacesLived($placesLived)
    {
        $this->placesLived = $placesLived;
    }
    public function getPlacesLived()
    {
        return $this->placesLived;
    }
    public function setPlusOneCount($plusOneCount)
    {
        $this->plusOneCount = $plusOneCount;
    }
    public function getPlusOneCount()
    {
        return $this->plusOneCount;
    }
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }
    public function getSkills()
    {
        return $this->skills;
    }
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }
    public function getTagline()
    {
        return $this->tagline;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrls($urls)
    {
        $this->urls = $urls;
    }
    public function getUrls()
    {
        return $this->urls;
    }
    public function setVerified($verified)
    {
        $this->verified = $verified;
    }
    public function getVerified()
    {
        return $this->verified;
    }
}

class Google_Service_PlusPages_PersonCover extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $coverInfoType = 'Google_Service_PlusPages_PersonCoverCoverInfo';
    protected $coverInfoDataType = '';
    protected $coverPhotoType = 'Google_Service_PlusPages_PersonCoverCoverPhoto';
    protected $coverPhotoDataType = '';
    public $layout;


    public function setCoverInfo(Google_Service_PlusPages_PersonCoverCoverInfo $coverInfo)
    {
        $this->coverInfo = $coverInfo;
    }
    public function getCoverInfo()
    {
        return $this->coverInfo;
    }
    public function setCoverPhoto(Google_Service_PlusPages_PersonCoverCoverPhoto $coverPhoto)
    {
        $this->coverPhoto = $coverPhoto;
    }
    public function getCoverPhoto()
    {
        return $this->coverPhoto;
    }
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function getLayout()
    {
        return $this->layout;
    }
}

class Google_Service_PlusPages_PersonCoverCoverInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $leftImageOffset;
    public $topImageOffset;


    public function setLeftImageOffset($leftImageOffset)
    {
        $this->leftImageOffset = $leftImageOffset;
    }
    public function getLeftImageOffset()
    {
        return $this->leftImageOffset;
    }
    public function setTopImageOffset($topImageOffset)
    {
        $this->topImageOffset = $topImageOffset;
    }
    public function getTopImageOffset()
    {
        return $this->topImageOffset;
    }
}

class Google_Service_PlusPages_PersonCoverCoverPhoto extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $height;
    public $url;
    public $width;


    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}

class Google_Service_PlusPages_PersonEmails extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $type;
    public $value;


    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}

class Google_Service_PlusPages_PersonImage extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $id;
    public $isDefault;
    public $url;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }
    public function getIsDefault()
    {
        return $this->isDefault;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

class Google_Service_PlusPages_PersonName extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $familyName;
    public $formatted;
    public $givenName;
    public $honorificPrefix;
    public $honorificSuffix;
    public $middleName;


    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }
    public function getFamilyName()
    {
        return $this->familyName;
    }
    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }
    public function getFormatted()
    {
        return $this->formatted;
    }
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }
    public function getGivenName()
    {
        return $this->givenName;
    }
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
    }
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
    }
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }
    public function getMiddleName()
    {
        return $this->middleName;
    }
}

class Google_Service_PlusPages_PersonOrganizations extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $department;
    public $description;
    public $endDate;
    public $location;
    public $name;
    public $primary;
    public $startDate;
    public $title;
    public $type;


    public function setDepartment($department)
    {
        $this->department = $department;
    }
    public function getDepartment()
    {
        return $this->department;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }
    public function getPrimary()
    {
        return $this->primary;
    }
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}

class Google_Service_PlusPages_PersonPlacesLived extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $primary;
    public $value;


    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }
    public function getPrimary()
    {
        return $this->primary;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}

class Google_Service_PlusPages_PersonUrls extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $label;
    public $type;
    public $value;


    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}

class Google_Service_PlusPages_Place extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $addressType = 'Google_Service_PlusPages_PlaceAddress';
    protected $addressDataType = '';
    public $displayName;
    public $id;
    public $kind;
    protected $positionType = 'Google_Service_PlusPages_PlacePosition';
    protected $positionDataType = '';


    public function setAddress(Google_Service_PlusPages_PlaceAddress $address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPosition(Google_Service_PlusPages_PlacePosition $position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
}

class Google_Service_PlusPages_PlaceAddress extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $formatted;


    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }
    public function getFormatted()
    {
        return $this->formatted;
    }
}

class Google_Service_PlusPages_PlacePosition extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $latitude;
    public $longitude;


    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
}

class Google_Service_PlusPages_PlusPagesAclentryResource extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $displayName;
    public $id;
    public $type;


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}

class Google_Service_PlusPages_Videostream extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $height;
    public $type;
    public $url;
    public $width;


    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}