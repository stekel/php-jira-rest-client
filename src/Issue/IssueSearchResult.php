<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 29.07.15
 * Time: 13:12.
 */

namespace JiraRestApi\Issue;

/**
 * Issue search result.
 */
class IssueSearchResult
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var \JiraRestApi\Issue\Issue[]
     */
    public $issues;

    /**
     * @return int
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param string $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    /**
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * @param Issue[] $issues
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;
    }

    /**
     * @param int $ndx
     *
     * @return Issue
     */
    public function getIssue($ndx)
    {
        return $this->issues[$ndx];
    }

}
