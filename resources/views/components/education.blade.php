<!-- Education Section-->
<div class="w-75 mx-auto px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <section>
            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
            <!-- Education Card 1-->
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <div id="education_id" class="row align-items-center gx-5">

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    const getEducation = async () => {
        try {
            const response = await axios.get('education');
            response.data.forEach(element => {
                const div = document.getElementById('education_id');
                div.innerHTML += (` <div class="col text-center text-lg-start mb-4 mb-lg-0">
                            <div class="bg-light p-4 rounded-4">
                                <div class="text-secondary fw-bolder mb-2">${element['duration']}</div>
                                <div class="mb-2">
                                    <div class="small fw-bolder">${element['institutionName']}</div>
                                </div>
                                <div class="fst-italic">
                                    <div class="small text-muted">${element['field']}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>${element['details']}</div>
                        </div>`)
            });
        } catch (error) {

        }
    }
    getEducation()
</script>
