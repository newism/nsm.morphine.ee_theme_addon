<h1>HTML Markup Test Suite for CSS</h1>
<p>The purpose of this document is to provide HTML markup that can be used in CSS Styling tests. The included base.css is used to style some of the basic elements.</p>
<h2>Sample document</h2>
<p>The sample document code below must be used as the base of all HTML documents.</p>
<h3>Example code</h3>
<pre><code>&lt;html&gt;
  &lt;head&gt;&lt;/head&gt;
  &lt;body&gt;
    &lt;div id=&quot;doc&quot;&gt;
      &lt;div id=&quot;head&quot;&gt;#head&lt;/div&gt;
      &lt;div id=&quot;body&quot;&gt;
        &lt;div id=&quot;content&quot;&gt;
          &lt;div class=&quot;copy&quot;&gt;#content &gt; .copy&lt;/div&gt;
          &lt;div class=&quot;sub-copy&quot;&gt;#content &gt; .sub-copy&lt;/div&gt;
        &lt;/div&gt;
        &lt;div id=&quot;sub-content&quot;&gt;
          &lt;div class=&quot;copy&quot;&gt;#sub-content &gt; .copy&lt;/div&gt;
          &lt;div class=&quot;sub-copy&quot;&gt;#sub-content &gt; .sub-copy&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div id=&quot;foot&quot;&gt;#foot&lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>
<h3>Live demo</h3>
<div id="doc">
	<div id="head">#head</div>
	<div id="body">
		<div id="content">
			<div class="copy">#content > .copy</div>
			<div class="sub-copy">#content > .sub-copy</div>
		</div>
		<div id="sub-content">
			<div class="copy">#sub-content > .copy</div>
			<div class="sub-copy">#sub-content > .sub-copy</div>
		</div>
	</div>
	<div id="foot">#foot</div>
</div>
<h2>Menus</h2>
<div class="alert info">
	<p>Menus use concatenated class names to build styles ie: ".menu.horizontal.flyout", however these rules do not work in ie6.</p>
	<p>If you need &lt;= IE6 support replace the periods (.) with underscores breaking the class down each of it's parts. Example:</p>
	<p><code>class="menu horizontal flyout"</code> becomes <code>class="menu menu_horizontal menu_horizontal_flyout"</code></p>
</div>
<h3>Vertical menu</h3>
<ul class="menu">
	<li><a href="#home">Home</a></li>
	<li><a href="#blog">Blog</a></li>
	<li><a href="#about">About</a>
</ul>
<h3>Horizontal menu</h3>
<ul class="menu horizontal">
	<li><a href="#home">Home</a></li>
	<li><a href="#blog">Blog</a></li>
	<li><a href="#about">About</a>
</ul>
<h3>Vertical flyout menu</h3>
<ul class="menu flyout">
	<li><a href="#home">Home</a></li>
	<li><a href="#blog">Blog</a>
		<ul>
			<li><a href="#cat-archives">Cat Archives</a></li>
			<li><a href="#month-archives">Month Archives</a></li>
		</ul>
	</li>
	<li><a href="#about">About</a>
</ul>
<h3>Horizontal flyout menu</h3>
<ul class="menu horizontal flyout">
	<li><a href="#home">Home</a></li>
	<li><a href="#blog">Blog</a>
		<ul>
			<li><a href="#cat-archives">Cat Archives</a></li>
			<li><a href="#month-archives">Month Archives</a></li>
		</ul>
	</li>
	<li><a href="#about">About</a>
</ul>
<h2 title="General Markup">General Markup - h<em>n</em>, p, a, strong, em, del, ins, abbr, accronym, sub, sup, blockquote cite</h2>
<h3>Headings</h3>
<h1 class="toc-ignore">Test H1: Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. </h1>
<h2 class="toc-ignore">Test H2: Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. </h2>
<h3 class="toc-ignore">Test H3: Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. </h3>
<h4 class="toc-ignore">Test H4: Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </h4>
<h5 class="toc-ignore">Test H5: Curabitur eget sapien. Duis cursus eros non sem fermentum convallis. Proin facilisis sapien et arcu. </h5>
<h6 class="toc-ignore">Test H6: Nulla facilisi. Suspendisse potenti. Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh. </h6>

<h3>Visual Headings</h3>
<p class='alert info'>Visual headings are styled irrespective of their tag. The tag can be changed to maximise SEO. The two classes for visual titles are .section-title and .page-title</p>
<h1 class='section-title toc-ignore'>h1.section-title</h1>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<h2 class='section-title toc-ignore'>h2.section-title</h2>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class='section-title toc-ignore'><strong>p.section-title strong</strong></p>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>

<h1 class='page-title toc-ignore'>h1.page-title</h1>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<h2 class='page-title toc-ignore'>h2.page-title</h2>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<h3 class='page-title toc-ignore'>h3.page-title</h3>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class='page-title toc-ignore'><strong>p.page-title strong</strong></p>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>


<h3>strong, cite, em, a</h3>
<p>Aliquam ut risus. <strong>&lt;strong&gt;Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.&lt;/strong&gt;</strong> Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. <cite>&lt;cite&gt;Maecenas eget nibh et sapien volutpat tempor.&lt;/cite&gt; </cite>Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit.&lt;/cite&gt;</cite> Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. <em>&lt;em&gt;Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros.&lt;em&gt;</em> Duis vehicula mi at augue. <a href="#">&lt;a&gt;Cras adipiscing sem eget turpis?&lt;/a&gt;</a> Aenean id tellus vel ipsum pharetra ultricies. </p>
<h3>a[rel=external], del, ins</h3>
<p>Curabitur eget sapien. <a href="#" rel="external">&lt;a rel=&quot;external&quot;&gt;Duis cursus eros non sem fermentum convallis.&lt;/a&gt;</a> Proin facilisis sapien et arcu. Nulla facilisi. Suspendisse potenti. Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh. Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <del>&lt;del&gt;Cras urna telluv; &lt;/del&gt;</del> <ins>&lt;ins&gt;varius eget, rutrum a, tempor vitae, ante? &lt;/ins&gt;</ins> Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<h3>sub, sup</h3>
<p>Vestibulum sed tortor? Praesent aliquet ullamcorper elit? <acronym title="W3C">&lt;acronym&gt;W3C&lt;/accronym&gt;</acronym> Vestibulum malesuada dapibus nisl. Donec in nisl consectetur lorem tristique dictum. H<sub>&lt;sub&gt;2&lt;/sub&gt;</sub>OE = mc<sup>&lt;sup&gt;2&lt;/sup&gt;</sup> Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh.</p>
<h3>abbr, acronym</h3>
<p>Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. <abbr title="Full text for abbriviation" lang="en">&lt;abbr&gt;An abbreviation: Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus.&lt;/abbr</abbr>&gt; Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. </p>
<h3>Combination styles - a, stong, em</h3>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. <a href="#">&lt;a&gt;Combination styles - a, strong, em: Aliquam &lt;strong&gt;<strong>in purus eget</strong>&lt;/strong&gt; sem <em>&lt;em&gt;fringilla Curabitur ipsum quam&lt;/em&gt;</em> ultricies&lt;/a&gt;.</a> Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. </p>
<h3>Blockquotes</h3>
<blockquote>
	<p>&lt;blockquote&gt;&lt;p&gt;Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies.&lt;/p&gt;</p>
	<p>&lt;p&gt;Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.&lt;/p&gt;</p>
	<blockquote>
		<p>&lt;blockquote&gt;&lt;p&gt;Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. &lt;/p&gt;</p>
		<p>&lt;p&gt;Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. &lt;/p&gt;&lt;/blockquote&gt;</p>
	</blockquote>
	<p>&lt;p&gt;Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. &lt;/p&gt;</p>
	<p>&lt;p&gt;Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. &lt;/p&gt;</p>
</blockquote>
<p>Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </p>
<p>Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </p>


<h3>Nested Lists</h3>
<p> Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. Aliquam in purus eget sem fringilla ultricies. </p>
<ol>
	<li>Neseted unordered list inside ordered list: Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit.
		<ul>
			<li><strong>&lt;strong&gt;Nulla imperdiet rhoncus risus.&lt;/strong&gt; </strong></li>
			<li>Pellentesque dapibus est aliquam mauris. </li>
			<li><em>&lt;em&gt;Mauris lobortis, pede nec viverra interdum.</em>&lt;/em&gt;</li>
		</ul>
	</li>
	<li> Est purus tincidunt mi.</li>
	<li>Nec pretium <a href="#">&lt;a&gt;neque&lt;/a&gt;</a> eros non dolor. </li>
</ol>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. </p>
<ul>
	<li>Neseted ordered list inside unordered list: Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit.
		<ol>
			<li><strong>&lt;strong&gt;Nulla imperdiet rhoncus risus.&lt;/strong&gt;</strong></li>
			<li>Pellentesque dapibus est aliquam mauris. </li>
			<li><em>&lt;em&gt;Mauris lobortis, pede nec viverra interdum.</em>&lt;/em&gt;</li>
		</ol>
	</li>
	<li> Est purus tincidunt mi.</li>
	<li>Nec pretium <a href="#">&lt;a&gt;neque&lt;/a&gt;</a> eros non dolor.</li>
</ul>
<ul>
	<li>Deep Nesting: Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit.
		<ol>
				<li><strong>&lt;strong&gt;Nulla imperdiet rhoncus risus&lt;/strong&gt;</strong></li>
				<li>Pellentesque dapibus est aliquam mauris. </li>
			<li><em>&lt;em&gt;Mauris lobortis, pede nec viverra interdum.</em>&lt;/em&gt;</li>
			<li>Maecenas eget nibh et sapien volutpat tempor.
				<ol>
					<li>Morbi rhoncus, orci et vehicula vestibulum
						<ul>
							<li> pede diam tristique augue, sit amet scelerisque tellus nulla et elit.</li>
							<li>Pellentesque rhoncus mauris ut turpis.</li>
						</ul>
					</li>
					<li>Aenean egestas. Donec commodo.</li>
					<li>Nulla id ante. </li>
				</ol>
			</li>
		</ol>
	</li>
	<li> Est purus tincidunt mi.</li>
	<li>Nec pretium <a href="#">&lt;a&gt;eque&lt;/a&gt;</a> eros non dolor.</li>
</ul>
<ol>
	<li>Deep Nesting: Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit.
		<ul>
			<li><strong>&lt;strong&gt;Nulla imperdiet rhoncus risus&lt;/strong&gt;</strong></li>
			<li>Pellentesque dapibus est aliquam mauris. </li>
			<li><em>&lt;em&gt;Mauris lobortis, pede nec viverra interdum.</em>&lt;/em&gt;</li>
			<li>Maecenas eget nibh et sapien volutpat tempor.
				<ol>
					<li>Morbi rhoncus, orci et vehicula vestibulum
						<ul>
							<li> pede diam tristique augue, sit amet scelerisque tellus nulla et elit.</li>
							<li>Pellentesque rhoncus mauris ut turpis.</li>
						</ul>
					</li>
					<li>Aenean egestas. Donec commodo.</li>
					<li>Nulla id ante. </li>
				</ol>
			</li>
		</ul>
	</li>
	<li> Est purus tincidunt mi.</li>
	<li>Nec pretium <a href="#">&lt;a&gt;eque&lt;/a&gt;</a> eros non dolor.</li>
</ol>

<h2>Alerts</h2>
<h3>Standard</h3>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class="alert">&lt;p class="alert"&gt;Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas.&lt;/p&gt;</p>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.</p>
<ul class="alert">
	<li>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. </li>
	<li>Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros.</li>
	<li>Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum.</li>
</ul>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius,</p>
<h3>Information</h3>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class="alert info">&lt;p class="alert info"&gt;Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas.&lt;/p&gt;</p>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.</p>
<ul class="alert info">
	<li>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. </li>
	<li>Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros.</li>
	<li>Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum.</li>
</ul>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius,</p>
<h3>Warning</h3>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class="alert warning">&lt;p class="alert warning"&gt;Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas.&lt;/p&gt;</p>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.</p>
<ul class="alert warning">
	<li>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. </li>
	<li>Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros.</li>
	<li>Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum.</li>
</ul>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius,</p>
<h3>Error</h3>
<p>Leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<p class="alert error">&lt;p class="alert error"&gt;Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas.&lt;/p&gt;</p>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.</p>
<ul class="alert error">
	<li>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. </li>
	<li>Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros.</li>
	<li>Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum.</li>
</ul>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius,</p>
<h2>Lists - ul, ol, dl</h2>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. </p>
<h3>Un-ordered list</h3>
<ul>
	<li>&lt;ul&gt;An un-ordered list: Donec commodo. </li>
	<li>Nulla id ante. </li>
	<li><strong>&lt;strong&gt;Quisque eget eros.&lt;/strong&gt; </strong></li>
	<li>&lt;em&gt;<em>Sed mollis sem eu orci.&lt;/em&gt; </em></li>
	<li><a href="#">&lt;a&gt;Curabitur venenatis porta eros.&lt;/a&gt; </a></li>
	<li>Duis vehicula mi at augue. </li>
	<li>Cras adipiscing sem eget turpis? </li>
	<li>Aenean id tellus vel ipsum pharetra ultricies.&lt;/ul&gt;</li>
</ul>
<p>Curabitur eget sapien. Duis cursus eros non sem fermentum convallis. Proin facilisis sapien et arcu. Nulla facilisi. Suspendisse potenti. Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh. Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. </p>
<h3>Ordered list</h3>
<ol>
	<li>&lt;ol&gt;An Ordered List: Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. </li>
	<li><strong>&lt;strong&gt;Nulla imperdiet rhoncus risus.&lt;/strong&gt;</strong></li>
	<li>Pellentesque dapibus est aliquam mauris. </li>
	<li><em>&lt;em&gt;Mauris lobortis, pede nec viverra interdum.</em>&lt;/em&gt;</li>
	<li> Est purus tincidunt mi.</li>
	<li>Nec pretium <a href="#">&lt;a&gt;neque&lt;/a&gt;</a> eros non dolor. &lt;ol&gt;</li>
</ol>
<h3>Definition List</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<dl>
	<dt>&lt;dt&gt;A definition list&gt;Vestibulum sed tortor?&lt;/dt&gt;</dt>
	<dd>&lt;dd&gt;Praesent aliquet ullamcorper elit?&lt;/dd&gt;</dd>
	<dt>&lt;dt&gt;Vestibulum malesuada dapibus nisl.&lt;/dt&gt;</dt>
	<dd>&lt;dd&gt;Donec in nisl consectetur lorem tristique dictum.&lt;/dd&gt;</dd>
	<dt>&lt;dt&gt;Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh.&lt;/dt&gt;</dt>
	<dd>&lt;dd&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.&lt;/dd&gt;</dd>
</dl>
<p>Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus.</p>

<h2>Grids</h2>
<h3>Single cell grid</h3>
<div class="gr">
	<div class="gc">Cell</div>
</div>
<div class="gr">
	<div class="gc">Cell</div>
</div>
<div class="gr">
	<div class="gc">Cell</div>
</div>

<h3>Double cell grid</h3>
<div class="gr gr-2">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-2">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-2">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>

<h3>Triple cell grid</h3>
<div class="gr gr-3">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-3">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-3">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>

<h3>Quadruple cell grid</h3>
<div class="gr gr-4">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-4">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>
<div class="gr gr-4">
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
	<div class="gc">Cell</div>
</div>

<h2>Tables</h2>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </p>
<table summary="Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus.">
	<caption>
	Test Table Caption
	</caption>
	<thead>
		<tr>
			<th scope="col">thead &gt; th</th>
			<th scope="col">thead &gt; th</th>
			<th scope="col">thead &gt; th</th>
			<th scope="col">thead &gt; th</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th scope="row">tfoot &gt; th</th>
			<td>tfoot &gt; td</td>
			<td>tfoot &gt; td</td>
			<td>tfoot &gt; td</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<th scope="row">tbody &gt; th</th>
			<td>tbody &gt; td</td>
			<td><strong>tbody &gt; td &gt; strong</strong></td>
			<td>tbody &gt; td</td>
		</tr>
		<tr>
			<th scope="row">tbody &gt; th</th>
			<td>tbody &gt; td</td>
			<td>tbody &gt; td</td>
			<td>tbody &gt; td</td>
		</tr>
		<tr>
			<th scope="row">tbody &gt; th</th>
			<td>tbody &gt; td</td>
			<td>tbody &gt; td</td>
			<td><em>tbody &gt; td &gt; em</em></td>
		</tr>
		<tr>
			<th scope="row">tbody &gt; th</th>
			<td>tbody &gt; td</td>
			<td>tbody &gt; td</td>
			<td>tbody &gt; td</td>
		</tr>
	</tbody>
</table>
<p>Curabitur eget sapien. Duis cursus eros non sem fermentum convallis. Proin facilisis sapien et arcu. Nulla facilisi. Suspendisse potenti. Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh. Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<p>Vestibulum sed tortor? Praesent aliquet ullamcorper elit? Vestibulum malesuada dapibus nisl. Donec in nisl consectetur lorem tristique dictum. Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus. Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. Aliquam in purus eget sem fringilla ultricies. </p>

<h2>Forms</h2>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </p>
<h3 class="toc-ignore">Form title</h3>
<form>
	<div class="form-note">
		<p><strong>.form-note</strong>: Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros.</p>
	</div>
	<fieldset>
		<legend>Legend</legend>
		<div class="hidden">
			<input type="hidden" id="id0" value="" name=""  />
		</div>
		<div class="section">
			<div class="text">
				<label for="id1">Text Label</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input type="text" id="id1" value="" name=""  />
			</div>
			<div class="text password">
				<label for="id2">Password Label</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input type="password" id="id2" value="" name=""  />
			</div>
			<div class="textarea">
				<label for="id3">Textarea Label</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<textarea id="id3" value="" name=""  >Content</textarea>
			</div>
		</div>
		<div class="section>">
			<div class="section-note">
				<ul>
					<li>.section note</li>
					<li>Section notes are not fieldset notes. They do describe fields grouped inside a fieldset such as password fields inside a profile fieldset.</li>
					<li>Checkout <a href="https://www.etsy.com/register.php" rel="external">Etsy's registration form for a good example.</a>
					<li>Your password must be at least 6 characters long.</li>
					<li>We'll never ask you for your password in an email</li>
					<li>Passwords are case sensitive.</li>
				</ul>
			</div>
			<div class="select">
				<label for="id4">Select Label</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<select id="id4" name="" value="">
					<option>Option 1</option>
					<option>Option 2</option>
				</select>
			</div>
		</div>
		<fieldset class="radios">
			<legend>Radio Buttons</legend>
			<div class="radio">
				<label for="id5">Radio Label 1</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input id="id5" name="" value="" type="radio" />
			</div>
			<div class="radio">
				<label for="id6">Radio Label 2</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input id="id6" name="" value="" type="radio" />
			</div>
		</fieldset>
		<fieldset class="checkboxes">
			<legend>Checkboxes</legend>
			<div class="checkbox">
				<label for="id7">Checkbox label 1</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input id="id7" name="" value="" type="checkbox" />
			</div>
			<div class="checkbox">
				<label for="id8">Checkbox label 2</label> <em>* is required</em> 
				<div class='field-note'>Field note</div>
				<input id="id8" name="" value="" type="checkbox" />
			</div>
		</fieldset>
	</fieldset>
	<div class="butons">
		<button type="submit">Submit</button>
	</div>
</form>

<p>Curabitur eget sapien. Duis cursus eros non sem fermentum convallis. Proin facilisis sapien et arcu. Nulla facilisi. Suspendisse potenti. Nullam porttitor laoreet tortor? Nulla nisi purus, lacinia a, tristique quis, venenatis a, nibh. Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>

<h2>Embedded Object</h2>
<object width="400" height="225">
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=1185346&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
	<embed src="http://vimeo.com/moogaloop.swf?clip_id=1185346&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="400" height="225"></embed>
</object>
<p><a href="http://vimeo.com/1185346">Light-Paint Piano Player</a> from <a href="http://vimeo.com/user542620">Ryan Cashman</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
<p>Aliquam ut risus. Nam massa erat, ultrices eget, tempor vel, pretium ut, lacus. Curabitur laoreet, purus venenatis dignissim varius, leo mi sagittis lorem, id tristique lorem enim vel eros. Integer id sem sed est lacinia eleifend. Maecenas eget nibh et sapien volutpat tempor. Morbi rhoncus, orci et vehicula vestibulum, pede diam tristique augue, sit amet scelerisque tellus nulla et elit. Pellentesque rhoncus mauris ut turpis. Aenean egestas. Donec commodo. Nulla id ante. Quisque eget eros. Sed mollis sem eu orci. Curabitur venenatis porta eros. Duis vehicula mi at augue. Cras adipiscing sem eget turpis? Aenean id tellus vel ipsum pharetra ultricies. </p>

<h2>Figures </h2>
<p>Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<div class="figure figure-a">
	<img src="http://farm1.static.flickr.com/44/193395287_acb4d8e3ba_m.jpg?v=0" alt="Smarties Rainbow" />
	<p class="caption">Smarties Rainbow</p>
	<p class="credit">
		<abbr class="type" title="Photograph">Photo:</abbr>
		<cite>John Doe</cite>
		<a href="http://creativecommons.org/licenses/by/2.0/" rel="license">&copy; creative commons 2.0</a> 
	</p>
</div>
<p>Vestibulum sed tortor? Praesent aliquet ullamcorper elit? Vestibulum malesuada dapibus nisl. Donec in nisl consectetur lorem tristique dictum. Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus. Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. Aliquam in purus eget sem fringilla ultricies. </p>
<p>Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<div class="figure figure-b">
	<img src="http://farm1.static.flickr.com/44/193395287_acb4d8e3ba_m.jpg?v=0" alt="Smarties Rainbow" />
	<p class="caption">Smarties Rainbow</p>
	<p class="credit">
		<abbr class="type" title="Photograph">Photo:</abbr>
		<cite>John Doe</cite>
		<a href="http://creativecommons.org/licenses/by/2.0/" rel="license">&copy; creative commons 2.0</a> 
	</p>
</div>
<p>Vestibulum sed tortor? Praesent aliquet ullamcorper elit? Vestibulum malesuada dapibus nisl. Donec in nisl consectetur lorem tristique dictum. Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus. Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. Aliquam in purus eget sem fringilla ultricies. </p>
<p>Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>
<div class="figure figure-c">
	<img src="http://farm1.static.flickr.com/44/193395287_acb4d8e3ba_m.jpg?v=0" alt="Smarties Rainbow" />
	<p class="caption">Smarties Rainbow</p>
	<p class="credit">
		<abbr class="type" title="Photograph">Photo:</abbr>
		<cite>John Doe</cite>
		<a href="http://creativecommons.org/licenses/by/2.0/" rel="license">&copy; creative commons 2.0</a> 
	</p>
</div>
<p>Vestibulum sed tortor? Praesent aliquet ullamcorper elit? Vestibulum malesuada dapibus nisl. Donec in nisl consectetur lorem tristique dictum. Vestibulum eros mauris, posuere euismod, feugiat id; pretium ac, nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ipsum quam, dapibus ut, sodales nec, bibendum vel, neque. Ut at leo. Cras odio sem, volutpat eu; consequat vel, fermentum et, leo! Nulla tempus. Etiam tincidunt sodales nunc. Etiam nec sapien. Donec sit amet neque! Aenean nec nulla. Aliquam in purus eget sem fringilla ultricies. </p>
<p>Nunc eleifend; massa in mollis pretium, purus sapien aliquam diam; vehicula egestas ligula massa sed urna. Donec molestie, tortor eget hendrerit mattis, tellus erat fringilla purus, at tristique est justo in elit. Nulla imperdiet rhoncus risus. Pellentesque dapibus est aliquam mauris. Mauris lobortis, pede nec viverra interdum, est purus tincidunt mi; nec pretium neque eros non dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna tellus; varius eget, rutrum a, tempor vitae, ante? Ut eu lorem. Suspendisse eget ante ultrices magna placerat eleifend. Cras euismod metus a risus. </p>