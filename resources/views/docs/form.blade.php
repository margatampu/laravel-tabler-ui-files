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
                            <h2 class="mt-0 mb-4">Form components</h2>
                            <h3 id="color-input">Color input</h3>
                            <div class="example">
                                <div class="form-group">
                                    <label class="form-label">Color Input</label>
                                    <div class="row gutters-xs">
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" />
                                            <span class="colorinput-color bg-azure"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="indigo" class="colorinput-input" checked="" />
                                            <span class="colorinput-color bg-indigo"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="purple" class="colorinput-input" />
                                            <span class="colorinput-color bg-purple"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="pink" class="colorinput-input" />
                                            <span class="colorinput-color bg-pink"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="red" class="colorinput-input" />
                                            <span class="colorinput-color bg-red"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="orange" class="colorinput-input" />
                                            <span class="colorinput-color bg-orange"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="yellow" class="colorinput-input" />
                                            <span class="colorinput-color bg-yellow"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="lime" class="colorinput-input" />
                                            <span class="colorinput-color bg-lime"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="green" class="colorinput-input" />
                                            <span class="colorinput-color bg-green"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="teal" class="colorinput-input" />
                                            <span class="colorinput-color bg-teal"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Color Input<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row gutters-xs"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"azure"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-azure"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"indigo"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span>  <span class="na">checked</span><span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-indigo"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"purple"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-purple"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"pink"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-pink"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"red"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"orange"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-orange"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"yellow"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"lime"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-lime"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"green"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"colorinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"color"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"teal"</span> <span class="na">class=</span><span class="s">"colorinput-input"</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"colorinput-color bg-teal"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="image-input">Image input</h3>
                            <div class="example">
                                <div class="form-group">
                                    <label class="form-label">Image Check</label>
                                    <div class="row gutters-sm">
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/nathan-anderson-316188-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input" checked="" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/nathan-dumlao-287713-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/nicolas-picard-208276-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input" checked="" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/oskar-vertetics-53043-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/priscilla-du-preez-181896-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input" />
                                                <figure class="imagecheck-figure">
                                                    <img src="../demo/photos/ricardo-gomez-angel-262359-500.jpg" alt="}" class="imagecheck-image" />
                                                </figure>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Image Check<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row gutters-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"1"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/nathan-anderson-316188-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"2"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="na">checked</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/nathan-dumlao-287713-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"3"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/nicolas-picard-208276-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"4"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="na">checked</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/oskar-vertetics-53043-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"5"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/priscilla-du-preez-181896-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"imagecheck mb-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"imagecheck"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"6"</span> <span class="na">class=</span><span class="s">"imagecheck-input"</span>  <span class="nt">/&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"imagecheck-figure"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"./demo/photos/ricardo-gomez-angel-262359-500.jpg"</span> <span class="na">alt=</span><span class="s">"}"</span> <span class="na">class=</span><span class="s">"imagecheck-image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="icon-input">Icon input</h3>
                            <div class="example">
                                <div class="form-group">
                                    <label class="form-label">Icon input</label>
                                    <div class="input-icon mb-3">
                                        <input type="text" class="form-control" placeholder="Search for..." />
                                        <span class="input-icon-addon">
                                        <i class="fe fe-search"></i>
                                        </span>
                                    </div>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                        <i class="fe fe-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Icon input<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-icon mb-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search for..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-icon-addon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-search"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-icon-addon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-user"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="toggle-switches">Toggle switches</h3>
                            <div class="example">
                                <div class="form-group">
                                    <div class="form-label">Toggle switches</div>
                                    <div class="custom-switches-stacked">
                                        <label class="custom-switch">
                                        <input type="radio" name="option" value="1" class="custom-switch-input" checked="" />
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Option 1</span>
                                        </label>
                                        <label class="custom-switch">
                                        <input type="radio" name="option" value="2" class="custom-switch-input" />
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Option 2</span>
                                        </label>
                                        <label class="custom-switch">
                                        <input type="radio" name="option" value="3" class="custom-switch-input" />
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Toggle switches<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-switches-stacked"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-switch"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"option"</span> <span class="na">value=</span><span class="s">"1"</span> <span class="na">class=</span><span class="s">"custom-switch-input"</span> <span class="na">checked</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-description"</span><span class="nt">&gt;</span>Option 1<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-switch"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"option"</span> <span class="na">value=</span><span class="s">"2"</span> <span class="na">class=</span><span class="s">"custom-switch-input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-description"</span><span class="nt">&gt;</span>Option 2<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-switch"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"option"</span> <span class="na">value=</span><span class="s">"3"</span> <span class="na">class=</span><span class="s">"custom-switch-input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-description"</span><span class="nt">&gt;</span>Option 3<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="form-fieldset">Form fieldset</h3>
                            <div class="example">
                                <fieldset class="form-fieldset">
                                    <div class="form-group">
                                        <label class="form-label">Full name<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Company<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email<span class="form-required">*</span></label>
                                        <input type="email" class="form-control" />
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone number</label>
                                        <input type="tel" class="form-control" />
                                    </div>
                                </fieldset>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-fieldset"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Full name<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-required"</span><span class="nt">&gt;</span>*<span class="nt">&lt;/span&gt;&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Company<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-required"</span><span class="nt">&gt;</span>*<span class="nt">&lt;/span&gt;&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-required"</span><span class="nt">&gt;</span>*<span class="nt">&lt;/span&gt;&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group mb-0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-label"</span><span class="nt">&gt;</span>Phone number<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"tel"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/fieldset&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection