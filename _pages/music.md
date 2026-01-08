---
layout: page
title: "music"
permalink: /music/
description: "Where <strong>Jazz</strong> meets <strong>Algorithm</strong>. A collection of sonic experiments and produced tracks."
nav: true
nav_order: 3
---

<!-- Sonic Lab Header -->
<div style="text-align: center; margin-bottom: 3rem;">
  <p class="post-description">Explore the complete discography on streaming platforms.</p>
  <a href="https://music.163.com/#/artist?id=123456" class="btn btn-sm z-depth-1" role="button" target="_blank" style="margin-right: 1rem;">NetEase Music</a>
  <a href="#" class="btn btn-sm z-depth-1" role="button">Spotify (Coming Soon)</a>
</div>

{% include bib_search.liquid %}

<div class="publications">
  {% bibliography --file music %}
</div>
