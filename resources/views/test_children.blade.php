
    <!-- END nav -->
    @extends('master')

        @section('content')

        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                  <h1 class="mb-2 bread">Blog Single</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{('testimonial')}}">Testimonial <i class="ion-ios-arrow-forward"></i></a></span> <span>Test_Children <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
              </div>
            </div>
          </section>

              <section class="ftco-section text-center">
                  <div class="container">
                      <div class="row">
                <div class="col-lg-8 offset-2 ftco-animate">
                  <h2 class="mb-3">#1.Skills To Develop Your Child Memory</h2>
                  <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                  <p>
                    <img src="images/image_2.jpg" alt="" class="img-fluid">
                  </p>
                  <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                  <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
                  <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
                  <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
                  <!--<div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                      <a href="#" class="tag-cloud-link">Life</a>
                      <a href="#" class="tag-cloud-link">Sport</a>
                      <a href="#" class="tag-cloud-link">Tech</a>
                      <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                  </div>

                  <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                      <img src="images/teacher-1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                      <h3>George Washington</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                  </div>


                  <div class="pt-5 mt-5">
                    <h3 class="mb-5 h4 font-weight-bold">6 Comments</h3>
                    <ul class="comment-list">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/teacher-1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>

                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/teacher-1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/teacher-1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>


                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/teacher-1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                  <ul class="children">
                                    <li class="comment">
                                      <div class="vcard bio">
                                        <img src="images/teacher-1.jpg" alt="Image placeholder">
                                      </div>
                                      <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                      </div>
                                    </li>
                                  </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/teacher-1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    </ul>-->
                    <!-- END comment-list -->

<!--                    <div class="comment-form-wrap pt-5">
                      <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                      <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                        </div>

                      </form>
                    </div>
                  </div>-->
                </div> <!-- .col-md-8 -->

            <!--    <div class="col-lg-4 sidebar ftco-animate">
                  <div class="sidebar-box">
                    <form action="#" class="search-form">
                      <div class="form-group">
                        <span class="icon icon-search"></span>
                        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                      </div>
                    </form>
                  </div>
                  <div class="sidebar-box ftco-animate">
                      <h3>Category</h3>
                    <ul class="categories">
                      <li><a href="#">Art <span>(6)</span></a></li>
                      <li><a href="#">Sports <span>(8)</span></a></li>
                      <li><a href="#">Language <span>(2)</span></a></li>
                      <li><a href="#">Food <span>(2)</span></a></li>
                      <li><a href="#">Music <span>(2)</span></a></li>
                    </ul>
                  </div>

                  <div class="sidebar-box ftco-animate">
                    <h3>Popular Articles</h3>
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta">
                          <div><a href="#"><span class="icon-calendar"></span> Jan. 27, 2019</a></div>
                          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta">
                          <div><a href="#"><span class="icon-calendar"></span> Jan. 27, 2019</a></div>
                          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <div class="meta">
                          <div><a href="#"><span class="icon-calendar"></span> Jan. 27, 2019</a></div>
                          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                      </div>
                    </div>
                  </div>-->

                <!--  <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <ul class="tagcloud m-0 p-0">
                      <a href="#" class="tag-cloud-link">School</a>
                      <a href="#" class="tag-cloud-link">Kids</a>
                      <a href="#" class="tag-cloud-link">Nursery</a>
                      <a href="#" class="tag-cloud-link">Daycare</a>
                      <a href="#" class="tag-cloud-link">Care</a>
                      <a href="#" class="tag-cloud-link">Kindergarten</a>
                      <a href="#" class="tag-cloud-link">Teacher</a>
                    </ul>
                  </div>

                  <div class="sidebar-box ftco-animate">
                      <h3>Archives</h3>
                    <ul class="categories">
                        <li><a href="#">December 2018 <span>(30)</span></a></li>
                        <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                      <li><a href="#">September 2018 <span>(6)</span></a></li>
                      <li><a href="#">August 2018 <span>(8)</span></a></li>
                    </ul>
                  </div>


                  <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                  </div>-->
                </div><!-- END COL -->
              </div>
                  </div>
              </section>
@endsection

		<!--<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_4.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_5.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_6.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
        </section>-->


