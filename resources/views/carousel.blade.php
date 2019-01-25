@extends('layouts.app')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Carousel</h3>
                    </div>
                    <div class="card-body">
                        <div id="carousel-default" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="./demo/photos/adrian-infernus-281832-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/ales-krivec-107499-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/alex-bertha-316137-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/anders-jilden-307322-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/andrew-neel-141710-1500.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Carousel with indicators</h3>
                    </div>
                    <div class="card-body">
                        <div id="carousel-indicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
                                <li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="./demo/photos/aneta-ivanova-776-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/anthony-intraversato-257182-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/artem-sapegin-229391-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/bobby-burch-145906-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/casey-horner-339165-1500.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Carousel with controls</h3>
                    </div>
                    <div class="card-body">
                        <div id="carousel-controls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="./demo/photos/christian-joudrey-96208-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/christoph-bengtsson-lissalde-80291-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/clarisse-meyer-122804-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/cristina-gottardi-259243-1500.jpg" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/david-klaasen-54203-1500.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Carousel with captions</h3>
                    </div>
                    <div class="card-body">
                        <div id="carousel-captions" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="./demo/photos/david-marcu-114194-1500.jpg" data-holder-rendered="true">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/davide-cantelli-139887-1500.jpg" data-holder-rendered="true">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/dino-reichmuth-84359-1500.jpg" data-holder-rendered="true">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/eberhard-grossgasteiger-311213-1500.jpg" data-holder-rendered="true">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="./demo/photos/geran-de-klerk-290418-1500.jpg" data-holder-rendered="true">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection