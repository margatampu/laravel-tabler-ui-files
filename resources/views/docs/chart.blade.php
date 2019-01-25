@extends('layouts.app')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Documentation
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-3 order-lg-1 mb-4">
                @include('docs._nav')
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-wrap p-lg-6">
                            <h2 class="mt-0 mb-4">Charts</h2>
                            <h3 id="c3js-charts">c3.js charts</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Chart name</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-wrapper" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).ready(function(){
                                            var chart = c3.generate({
                                                bindto: '#chart-wrapper', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', 7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                                                        ['data2', 3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                                                    ],
                                                    labels: true,
                                                    type: 'line', // default type of chart
                                                    colors: {
                                                        'data1': tabler.colors["blue"],
                                                        'data2': tabler.colors["green"]
                                                    },
                                                    names: {
                                                        // name of each serie
                                                        'data1': 'Tokyo',
                                                        'data2': 'London'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
                                                    },
                                                },
                                                legend: {
                                                    show: false, //hide legend
                                                },
                                                padding: {
                                                    bottom: 0,
                                                    top: 0
                                                },
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Chart name<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"chart-wrapper"</span> <span class="na">style=</span><span class="s">"height: 16rem"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;script&gt;</span>
  <span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">ready</span><span class="p">(</span><span class="kd">function</span><span class="p">(){</span>
    <span class="kd">var</span> <span class="nx">chart</span> <span class="o">=</span> <span class="nx">c3</span><span class="p">.</span><span class="nx">generate</span><span class="p">({</span>
      <span class="na">bindto</span><span class="p">:</span> <span class="s1">'#chart-wrapper'</span><span class="p">,</span> <span class="c1">// id of chart wrapper</span>
      <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">columns</span><span class="p">:</span> <span class="p">[</span>
            <span class="c1">// each columns data</span>
          <span class="p">[</span><span class="s1">'data1'</span><span class="p">,</span> <span class="mf">7.0</span><span class="p">,</span> <span class="mf">6.9</span><span class="p">,</span> <span class="mf">9.5</span><span class="p">,</span> <span class="mf">14.5</span><span class="p">,</span> <span class="mf">18.4</span><span class="p">,</span> <span class="mf">21.5</span><span class="p">,</span> <span class="mf">25.2</span><span class="p">,</span> <span class="mf">26.5</span><span class="p">,</span> <span class="mf">23.3</span><span class="p">,</span> <span class="mf">18.3</span><span class="p">,</span> <span class="mf">13.9</span><span class="p">,</span> <span class="mf">9.6</span><span class="p">],</span>
          <span class="p">[</span><span class="s1">'data2'</span><span class="p">,</span> <span class="mf">3.9</span><span class="p">,</span> <span class="mf">4.2</span><span class="p">,</span> <span class="mf">5.7</span><span class="p">,</span> <span class="mf">8.5</span><span class="p">,</span> <span class="mf">11.9</span><span class="p">,</span> <span class="mf">15.2</span><span class="p">,</span> <span class="mf">17.0</span><span class="p">,</span> <span class="mf">16.6</span><span class="p">,</span> <span class="mf">14.2</span><span class="p">,</span> <span class="mf">10.3</span><span class="p">,</span> <span class="mf">6.6</span><span class="p">,</span> <span class="mf">4.8</span><span class="p">]</span>
        <span class="p">],</span>
        <span class="na">labels</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">type</span><span class="p">:</span> <span class="s1">'line'</span><span class="p">,</span> <span class="c1">// default type of chart</span>
        <span class="na">colors</span><span class="p">:</span> <span class="p">{</span> 
          <span class="s1">'data1'</span><span class="p">:</span> <span class="nx">tabler</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"blue"</span><span class="p">],</span>
          <span class="s1">'data2'</span><span class="p">:</span> <span class="nx">tabler</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"green"</span><span class="p">]</span>
        <span class="p">},</span>
        <span class="na">names</span><span class="p">:</span> <span class="p">{</span>
            <span class="c1">// name of each serie</span>
          <span class="s1">'data1'</span><span class="p">:</span> <span class="s1">'Tokyo'</span><span class="p">,</span>
          <span class="s1">'data2'</span><span class="p">:</span> <span class="s1">'London'</span>
        <span class="p">}</span>
      <span class="p">},</span>
      <span class="na">axis</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">x</span><span class="p">:</span> <span class="p">{</span>
          <span class="na">type</span><span class="p">:</span> <span class="s1">'category'</span><span class="p">,</span>
          <span class="c1">// name of each category</span>
          <span class="na">categories</span><span class="p">:</span> <span class="p">[</span><span class="s1">'Jan'</span><span class="p">,</span> <span class="s1">'Feb'</span><span class="p">,</span> <span class="s1">'Mar'</span><span class="p">,</span> <span class="s1">'Apr'</span><span class="p">,</span> <span class="s1">'May'</span><span class="p">,</span> <span class="s1">'Jun'</span><span class="p">]</span>
        <span class="p">},</span>
      <span class="p">},</span>
      <span class="na">legend</span><span class="p">:</span> <span class="p">{</span>
                <span class="na">show</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span> <span class="c1">//hide legend</span>
      <span class="p">},</span>
      <span class="na">padding</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">bottom</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span>
        <span class="na">top</span><span class="p">:</span> <span class="mi">0</span>
      <span class="p">},</span>
    <span class="p">});</span>
  <span class="p">});</span>
<span class="nt">&lt;/script&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection