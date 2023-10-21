<div class="w-75 mx-auto px-5 my-5">
    <!-- Experience Card 1-->
    <section>
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <div id="experience_id" class="row align-items-center gx-5">

                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const getExperience = async () => {
        try {
            const response = await axios.get('experiences');
            response.data.forEach(element => {
                const div = document.getElementById('experience_id');
                div.innerHTML += (` <div class="col text-center text-lg-start mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-primary fw-bolder mb-2">${element['duration']}</div>
                            <div class="small fw-bolder">${element['title']}</div>
                            <div class="small text-muted">${element['designation']}</div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>${element['details']}</div>
                    </div>`)
            });
        } catch (error) {

        }
    }
    getExperience();
</script>
