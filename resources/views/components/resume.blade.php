<div class="w-75 px-5 my-5 mx-auto">
    <div class="row col-lg-12 shadow rounded">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div id="download-resume" class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    const downloadResume = async () => {
        try {
            const respoonse = await axios.get('/resumeDownload');
            respoonse.data.forEach(element => {
                const div = document.getElementById('download-resume');
                div.innerHTML += (`<a class="btn btn-primary px-4 py-3" href="${element['download_link']}">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>`);
            });
        } catch (error) {
            console.log(error);
        }
    }

    downloadResume();
</script>
