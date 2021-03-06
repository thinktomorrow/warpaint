

<section class="stack-l" id="grid-basic">

    <h2>Basic grid</h2>
    <h4>Quick start:</h4>
    <ol>
        <li>Create a <code>&lt;div class="row"&gt;</code> element.</li>
        <li>Add multiple <code>&lt;div class="column"&gt;</code> elements to the row.</li>
    </ol>

    <div class="dummy">
        <div class="row">
            <div class="column text-center">First column</div>
            <div class="column text-center">Second column</div>
        </div>
    </div>

    <pre><code class="html">&lt;div class="row"&gt;
    &lt;div class="column"&gt;First column&lt;/div&gt;
    &lt;div class="column"&gt;Second column&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <h4>Additional info:</h4>

    <ul>
        <li>The row element acts as a wrapper for a group of columns. It functions as the flexbox parent and
            makes sure the child columns are positioned properly.
        </li>
    </ul>
</section>
<section class="stack-l" id="columns">

    <h2>Columns</h2>

    <ul>
        <li>By default, columns are equally divided inside the row element.</li>
        <li>Columns inside the same row are equal in height.</li>
    </ul>

    <div class="dummy">
        <div class="row">
            <div class="column">1</div>
            <div class="column">2</div>
            <div class="column">3</div>
        </div>
        <div class="row">
            <div class="column">1</div>
            <div class="column">2</div>
            <div class="column">3.<br>Pushing the entire row down</div>
            <div class="column">4</div>
            <div class="column">5</div>
        </div>
    </div>

    <pre><code class="html">&lt;div class="row"&gt;
&lt;div class="column"&gt;1&lt;/div&gt;
&lt;div class="column"&gt;2&lt;/div&gt;
&lt;div class="column"&gt;3&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
&lt;div class="column"&gt;1&lt;/div&gt;
&lt;div class="column"&gt;2&lt;/div&gt;
&lt;div class="column"&gt;3.&lt;br&gt;Pushing the entire row down&lt;/div&gt;
&lt;div class="column"&gt;4&lt;/div&gt;
&lt;div class="column"&gt;5&lt;/div&gt;
&lt;/div&gt;</code></pre>

</section>

<section class="stack-l" id="grid-width">

    <h2>Fixed sizes</h2>
    <p>
        If you need to fixate the relative width of your columns, warpaint provides a basic set of sizing
        classes for you to use.
        For the 12-column grid, you can opt to size from <code>.column-1</code> to <code>.column-12</code>.
    </p>

    <div class="dummy">
        <div class="row">
            <div class="column-6">.column-6</div>
            <div class="column-6">.column-6</div>
        </div>
        <div class="row">
            <div class="column-7">.column-7</div>
            <div class="column-5">.column-5</div>
        </div>
        <div class="row">
            <div class="column-8">.column-8</div>
            <div class="column-4">.column-4</div>
        </div>
        <div class="row">
            <div class="column-9">.column-9</div>
            <div class="column-3">.column-3</div>
        </div>
        <div class="row">
            <div class="column-10">.column-10</div>
            <div class="column-2">2</div>
        </div>
        <div class="row">
            <div class="column-11">.column-11</div>
            <div class="column-1">1</div>
        </div>
    </div>

    <pre><code class="html">&lt;div class="row"&gt;
&lt;div class="column-6"&gt;6&lt;/div&gt;
&lt;div class="column-6"&gt;6&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
&lt;div class="column-10"&gt;10&lt;/div&gt;
&lt;div class="column-2"&gt;2&lt;/div&gt;
&lt;/div&gt;
...</code></pre>
    <p class="note">
        The default structure is a 12-column grid. But if you compile from sass, this can be easily changed by
        changing the <code>$grid-columns</code> value in the <em>settings.scss</em> file.
    </p>

</section>

<section id="grid-container" class="stack-l">

    <h2>Container</h2>

    <p>
        To present your content with some space to the left and right, place your rows inside a
        <code>.container</code> wrapper.
        By default the grid expands to the full width of its parent.
    </p>

    <div class="dummy zebra">
        <div class="container">
            <div class="row">
                <div class="column">This is content</div>
                <div class="column">placed inside a container.</div>
            </div>
        </div>
    </div>

    <pre><code class="html">&lt;div class="container"&gt;
&lt;div class="row"&gt;
    &lt;div class="column"&gt;This is content&lt;/div&gt;
    &lt;div class="column"&gt;placed inside a container.&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>

</section>

<section id="grid-gutter">
    <h2>Gutters</h2>
    <p>
        If you like some spacing between columns, add the <code>.gutter</code> class to your <code>.row</code>
        element.
        This way all child columns will receive an equally spaced gutter between them.
    </p>

    <div class="dummy-gutter stack inset-s" style="background-color:aliceblue">
        <div class="row gutter-s">
            <div class="column">
                <div class="box">I'm guttered</div>
            </div>
            <div class="column">
                <div class="box">I'm guttered</div>
            </div>
            <div class="column-5">
                <div class="box">I'm guttered</div>
            </div>
            <div class="column-5">
                <div class="box">I'm guttered</div>
            </div>
        </div>
        <div class="row gutter-s">
            <div class="column">
                <div class="box">We're all guttered</div>
            </div>
            <div class="column">
                <div class="box">We're all guttered</div>
            </div>
            <div class="column">
                <div class="box">We're all guttered</div>
            </div>
        </div>
    </div>

    <pre><code class="html">&lt;div class="row gutter"&gt;
&lt;div class="column"&gt;&lt;div class="box"&gt;I'm guttered&lt;/div&gt;&lt;/div&gt;
&lt;div class="column"&gt;&lt;div class="box"&gt;I'm guttered&lt;/div&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <p>
        It is important to note that when using gutters, the column element acts as a wrapper of the displayed
        content.
        The gutter logic add padding to each column in order to realize flexible spacing in between.
    </p>
    <p>
        Instead of styling the column itself you should rather apply styles on the inner child element.
    </p>

    <p class="note">
        <strong>Overflow due to negative margins</strong><br><br>
        For optimal positioning of guttered columns, the parent row has negative margins on left and right
        sides.
        There is no issue when using the container wrapper but if you have columns from edge to edge of the
        viewport, be aware that the negative margins will cause an overflow on your body element.
        <br><br>
        Hide the horizontal overflow on the body like so: <code>body{ overflow-x:hidden; }</code>
    </p>

</section>

<section class="stack-l" id="grid-responsive">
    <h2 id="responsive-grid">Responsive sizing</h2>
    <p>
        Warpaint utilizes <a href="documentation.html#responsive-breakpoints">5 breakpoints</a> You can set a
        specific column size for each of these breakpoints.
    </p>
    <p>
        Prepend the column class with a <em>breakpoint prefix</em> like <code>xs-, s-, m-, l- or xl-</code>.
        E.g. Adding <code>.l-column-3</code> to your column will enforce a 1/4 column size for all viewports
        equal or wider than the large breakpoint (around 64em)
    </p>

    <div class="dummy">
        <div class="row">
            <div class="l-column-3 column-6">
                <div class="inset-dummy">.l-column-3 .column-6</div>
            </div>
            <div class="l-column-3 column-6">
                <div class="inset-dummy">.l-column-3 .column-6</div>
            </div>
            <div class="l-column-3 column-6">
                <div class="inset-dummy">.l-column-3 .column-6</div>
            </div>
            <div class="l-column-3 column-6">
                <div class="inset-dummy">.l-column-3 .column-6</div>
            </div>
        </div>
    </div>
    <div class="text-center stack-xs font-s"><em>Resize the viewport to view the change. Active breakpoint is
            <span class="active-breakpoint-text"></span></em>.
    </div>

    <pre><code class="html">&lt;div class="row"&gt;
&lt;div class="l-column-3 column-6"&gt;...&lt;/div&gt;
&lt;div class="l-column-3 column-6"&gt;...&lt;/div&gt;
&lt;div class="l-column-3 column-6"&gt;...&lt;/div&gt;
&lt;div class="l-column-3 column-6"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <h4>Multiple sizes</h4>
    <p>
        Sizing logic is calculated from smaller to larger viewports (aka mobile first).
        You can add responsive sizes for each breakpoint. However it is good practise to just set a default
        column size and only add responsive sizing if it's needed.
    </p>

    <pre><code class="html">&lt;!-- Don't do this --&gt;
&lt;div class="row"&gt;
    &lt;div class="xs-column-6 l-column-6 xl-column-3"&gt;&lt;/div&gt;
...

&lt;!-- instead do this --&gt;
&lt;div class="row"&gt;
    &lt;div class="column-6 xl-column-3"&gt;&lt;/div&gt;
...</code></pre>

</section>