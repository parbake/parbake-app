<div class="row">
    <div class="col-md-12">
        <h2><?php echo $content['Content']['title']; ?></h2>

        <strong>By: </strong><?php echo $content['CreatedUser']['UserProfile']['display_name']; ?>
        <strong>On: </strong><?php echo date('m/d/y', strtotime($content['Content']['created'])); ?>

        <div><?php echo $content['Content']['body']; ?></div>
    
    <a name="comments"></a>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'jasondsnider'; // required: replace example with your forum shortname
        var disqus_identifier = '<?php echo $content['Content']['slug']; ?>';
        var disqus_url = 'https://jasonsnider.com/<?php echo $this->here ?>';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>
        Please enable JavaScript to view the 
        <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
    </noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>
</div>