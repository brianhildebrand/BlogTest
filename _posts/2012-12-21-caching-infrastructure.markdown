---
layout: post
title: "Best Practice #1: Caching Infrastructure"
date: {}
categories: technology
author: Brian VanderZanden
"author-initials": bv
header: "http://fpoimg.com/940x350"
published: true
---

A 1 second delay in page response can result in a 7% reduction in conversions.
Source: [blog.kissmetrics.com/loading-time](http://blog.kissmetrics.com/loading-time)

At Words Pictures Ideas we apply caching infrastructure best practices to our clients' websites enhancing, optimizing, monitoring and measuring ensuring that with each visit, the user experience is fluid. Ultimately, our rigor leads to a higher success rate in achieving clients' goals and objectives.

The quickest data request is no request. Common assets should only be downloaded once, then stored long term in a user's cache. Javascript functionality libraries, like jQuery, are served from a common location.

Static assets, like movies and images, are delivered to edge locations around the world geographically closer to the user, resulting in fewer network hops for the data to traverse. This step removes around 80% of the number of requests from the originating server, freeing it up to handle the remaining requests more quickly.

The web server provides the canonical answers when an edge location request can't be fulfilled, or to prime the cache. To provide these resources as quickly as possible, the web server holds a cached copy of the completely rendered .html page in memory for rapid retrieval.

Should that cache lookup miss, there is a lookup for the page written out to disk. Should that not exist, the web server and application server will then rebuild the dynamic page. Often, components of a page don't change regularly, so they can be cached internally (e.g. page headers, footers and menus). Those pre-rendered assets can be saved in the database, on disk, or in a query cache.

Should all of the above caches miss, the page is built by querying from a database. The resultant page gets propagated downstream and cached to dramatically speed up subsequent requests for that same resource.

Caching Infrastructure Benefits:
1. Multiple layers of data delivery acceleration between the actual content and the end-user
2. Each layer increases the speed with which your site is delivered to the end-user
3. The faster the page load time, the better the user experience