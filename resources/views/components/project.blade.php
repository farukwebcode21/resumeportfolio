<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div id="project_id">

                </div>
                {{-- <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Project Name 2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum
                                    aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad
                                    asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                            </div>
                            <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<script>
    getProject('project', 'loading-div', 'project_id');
    const getHtml = async (id, data) => {
        let div = document.getElementById(id);
        div.innerHTML += (`<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${data['title']}</h2>
                                <p>${data['details']}</p>
                                <button href="${data['previewLink']}" class="btn btn-success">Preview Link</button>
                            </div>
                            <img class="img-fluid" src="${data['thumbnailLink']}" alt="..." />
                        </div>
                    </div>
                </div>`)
    }
</script>
