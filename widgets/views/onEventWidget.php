
<div class="panel">
    <div class="back">
        <div class="panel-content">
            <h5 class="panel-title">
                add widget to Sidebar
            </h5>
            <hr>
            <pre><code class="hljs php" style="">
public function onDashboardSidebarInit($event)
{
  $event->sender->addWidget(
     onEventWidget::className(), [], ['sortOrder' => 100]
  );
}</code></pre>
            using Module Events
        </div>
    </div>
</div>
