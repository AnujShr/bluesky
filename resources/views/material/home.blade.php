@extends('layouts.material.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Used Space</p>
                            <h3 class="card-title">49/50
                                <small>GB</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                <a href="#pablo">Get More Space...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Revenue</p>
                            <h3 class="card-title">$34,245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">info_outline</i>
                            </div>
                            <p class="card-category">Fixed Issues</p>
                            <h3 class="card-title">75</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Github
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <p class="card-category">Followers</p>
                            <h3 class="card-title">+245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="enquiry">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">Recent Specific Enquiries</h4>
                                <p class="card-category">New enquiry on 15th September, 2018</p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-info table-striped">
                                    <tbody>
                                    <tr>
                                        <td class="enq-date">{{\Carbon\Carbon::today()->format('d, M Y')}}</td>
                                        <td class="enq-name">Dakota Hello Rice</td>
                                        <td class="enq-enquiry">This is a long enquiry</td>
                                        <td class="enq-action"><i class="material-icons">
                                                visibility
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td>{{\Carbon\Carbon::today()->format('d, M Y')}}</td>
                                        <td>Minerva Hooper</td>
                                        <td>$23,789</td>
                                        <td><i class="material-icons">
                                                visibility
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td>{{\Carbon\Carbon::today()->format('d, M Y')}}</td>
                                        <td>Sage Rodriguez</td>
                                        <td>$56,142</td>
                                        <td><i class="material-icons">
                                                visibility
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td>{{\Carbon\Carbon::today()->format('d, M Y')}}</td>
                                        <td>Philip Chaney</td>
                                        <td>$38,735</td>
                                        <td><i class="material-icons">
                                                visibility
                                            </i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">Recent Properties</h4>
                            <p class="card-category">{{\Carbon\Carbon::now()}}</p>
                        </div>

                        <div class="card-body">
                            <section class="container">
                                <div class="row active-with-click">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Red">
                                            <h2>
                                                <span>Christopher Walken</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    The Deer Hunter
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container"
                                                     style="padding-left: 0px;  padding-right: 0px;">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He has appeared in more than 100 films and television shows,
                                                    including The Deer Hunter, Annie Hall, The Prophecy trilogy, The
                                                    Dogs of War ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Pink">
                                            <h2>
                                                <span>Sean Penn</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Mystic River
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-sean-penn.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He has won two Academy Awards, for his roles in the mystery
                                                    drama
                                                    Mystic River (2003) and the biopic Milk (2008). Penn began his
                                                    acting career in television with a brief appearance in a 1974
                                                    episode of Little House on the Prairie ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Purple">
                                            <h2>
                                                <span>Clint Eastwood</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Million Dollar Baby
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-clint-eastwood.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He rose to international fame with his role as the Man with No
                                                    Name
                                                    in Sergio Leone's Dollars trilogy of spaghetti Westerns during
                                                    the
                                                    1960s ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Deep-Purple">
                                            <h2>
                                                <span>Dustin Hoffman</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Kramer vs. Kramer
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-dustin-hoffman.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He has been known for his versatile portrayals of antiheroes and
                                                    vulnerable characters.[3] He won the Academy Award for Kramer
                                                    vs.
                                                    Kramer in 1979 ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Indigo">
                                            <h2>
                                                <span>Edward Norton</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    American History X
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-edward-norton.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He has been nominated for three Academy Awards for his work in
                                                    the
                                                    films Primal Fear, American History X and Birdman. He also
                                                    starred
                                                    in other roles ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Blue">
                                            <h2>
                                                <span>Michael Caine</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Educated Rita
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-michael-caine.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    English actor and author. Renowned for his distinctive working
                                                    class
                                                    cockney accent, Caine has appeared in over 115 films and is
                                                    regarded
                                                    as a British ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Light-Blue">
                                            <h2>
                                                <span>Harvey Keitel</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Pulp Fiction
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-harvey-keitel.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Some of his most notable starring roles were in Martin
                                                    Scorsese's
                                                    Mean Streets and Taxi Driver, Ridley Scott's The Duellists and
                                                    Thelma & Louise, Quentin Tarantino ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Cyan">
                                            <h2>
                                                <span>Jack Nicholson</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    The Shining
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-jack-nicholson.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Throughout his career, Nicholson has portrayed unique and
                                                    challenging roles, many of which include dark portrayals of
                                                    excitable, neurotic and psychopathic characters ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Teal">
                                            <h2>
                                                <span>Jeff Bridges</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    The Big Lebowski
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-jeff-bridges.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He comes from a well-known acting family and began his televised
                                                    acting in 1958 as a child with his father, Lloyd Bridges, and
                                                    brother, Beau, on television's Sea Hunt ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Green">
                                            <h2>
                                                <span>Joaquin Phoenix</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Her
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-joaquin-phoenix.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    is an American actor, producer, music video director, musician
                                                    and
                                                    activist. For his work as an artist, Phoenix has received a
                                                    Grammy
                                                    Award, a Golden Globe Award and three Academy ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Light-Green">
                                            <h2>
                                                <span>Tom Hanks</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Forrest Gump
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-tom-hanks.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He is known for his roles in Big (1988), Philadelphia (1993),
                                                    Forrest Gump (1994), Apollo 13 (1995), Saving Private Ryan,
                                                    You've
                                                    Got Mail (both 1998), The Green Mile (1999), Cast Away (2000)
                                                    ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Lime">
                                            <h2>
                                                <span>Philip Seymour Hoffman</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    25th Hour
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-philip-seymour-hoffman.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Best known for his distinctive supporting and character roles –
                                                    typically lowlifes, bullies, and misfits – Hoffman was a regular
                                                    presence in films from the early 1990s until his death at age
                                                    46.
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Yellow">
                                            <h2>
                                                <span>Paul Newman</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    The Color of Money
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-paul-newman.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He won numerous awards, including an Academy Award for his
                                                    performance in the 1986 film The Color of Money,[3] a BAFTA
                                                    Award, a
                                                    Screen Actors Guild Award, a Cannes Film Festival Award, an Emmy
                                                    Award ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Amber">
                                            <h2>
                                                <span>Marlon Brando</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    The Godfather
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-marlon-brando.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He is hailed for bringing a gripping realism to film acting, and
                                                    is
                                                    frequently cited as the greatest and most influential actor of
                                                    all
                                                    time.[2] A cultural icon, Brando is most famous for his Academy
                                                    ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Orange">
                                            <h2>
                                                <span>Kevin Spacey</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    American Beauty
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-kevin-spacey.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    He began his career as a stage actor during the 1980s, before
                                                    being
                                                    cast in supporting roles in film and television. He gained
                                                    critical
                                                    acclaim in the early 1990s, culminating in his first Academy
                                                    Award
                                                    ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Deep-Orange">
                                            <h2>
                                                <span>Robert De Niro</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Taxy Driver
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-robert-de-niro.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    His first major film roles were in the sports drama Bang the
                                                    Drum
                                                    Slowly (1973) and Martin Scorsese's crime film Mean Streets
                                                    (1973).
                                                    In 1974, after being turned down for the role of Sonny Corleone
                                                    in
                                                    the crime ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Brown">
                                            <h2>
                                                <span>Steve Mcqueen</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Papillon
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-steve-mcqueen.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Called "The King of Cool", his "anti-hero" persona, developed at
                                                    the
                                                    height of the Vietnam War-era counterculture, made him a top
                                                    box-office draw of the 1960s and 1970s. McQueen received an
                                                    Academy
                                                    Award nomination for his ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Grey">
                                            <h2>
                                                <span>Rugter Hauer</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Blade Runner
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-rugter-hauer.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Blonde, blue-eyed, tall and handsome Dutch actor Rutger Hauer
                                                    has an
                                                    international reputation for playing everything from romantic
                                                    leads
                                                    to action heroes to sinister villains. Hauer was born in
                                                    Breukelen,
                                                    a town in the province ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <article class="list-card Blue-Grey">
                                            <h2>
                                                <span>Morgan Freeman</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    Glory
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-fluid"
                                                         src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-morgan-freeman.jpg">
                                                </div>
                                                <div class="mc-description">
                                                    Freeman has received Academy Award nominations for his
                                                    performances
                                                    in Street Smart, Driving Miss Daisy, The Shawshank Redemption
                                                    and
                                                    Invictus ...
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                <h4>
                                                    Social
                                                </h4>
                                                <a class="fa fa-fw fa-facebook"></a>
                                                <a class="fa fa-fw fa-twitter"></a>
                                                <a class="fa fa-fw fa-linkedin"></a>
                                                <a class="fa fa-fw fa-google-plus"></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
