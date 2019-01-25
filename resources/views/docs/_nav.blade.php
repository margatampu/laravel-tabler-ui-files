<a href="https://github.com/tabler/tabler" class="btn btn-block btn-primary mb-6">
<i class="fe fe-github mr-2"></i>Browse source code
</a>
<!-- Getting started -->
<div class="list-group list-group-transparent mb-0">
    <a href="{{ route('docs.index') }}" class="list-group-item list-group-item-action {{ $uri == 'index' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Introduction</a>
</div>
<!-- Components -->
<div class="list-group list-group-transparent mb-0">
    <a href="{{ route('docs.alert') }}" class="list-group-item list-group-item-action {{ $uri == 'alert' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Alerts</a>
    <a href="{{ route('docs.avatar') }}" class="list-group-item list-group-item-action {{ $uri == 'avatar' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-user"></i></span>Avatars</a>
    <a href="{{ route('docs.button') }}" class="list-group-item list-group-item-action {{ $uri == 'button' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-plus-square"></i></span>Buttons</a>
    <a href="{{ route('docs.color') }}" class="list-group-item list-group-item-action {{ $uri == 'color' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-feather"></i></span>Colors</a>
    <a href="{{ route('docs.card') }}" class="list-group-item list-group-item-action {{ $uri == 'card' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-image"></i></span>Cards</a>
    <a href="{{ route('docs.chart') }}" class="list-group-item list-group-item-action {{ $uri == 'chart' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-pie-chart"></i></span>Charts</a>
    <a href="{{ route('docs.form') }}" class="list-group-item list-group-item-action {{ $uri == 'form' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-check-square"></i></span>Form components</a>
    <a href="{{ route('docs.tag') }}" class="list-group-item list-group-item-action {{ $uri == 'tag' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags</a>
    <a href="{{ route('docs.typography') }}" class="list-group-item list-group-item-action {{ $uri == 'typography' ? 'active' : '' }}"><span class="icon mr-3"><i class="fe fe-type"></i></span>Typography</a>
</div>