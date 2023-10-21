   <div class="w-75 mx-auto px-5 my-5">
       <div class="row gx-5 justify-content-center">
           <section>
               <div class="card shadow border-0 rounded-4 mb-5">
                   <div class="card-body p-5">
                       <div class="mb-0">
                           <div class="d-flex align-items-center mb-4">
                               <div
                                   class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                   <i class="bi bi-code-slash"></i>
                               </div>
                               <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                           </div>
                           <div id="language_id" class="row row-cols-1 row-cols-md-3 mb-4">


                           </div>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   </div>
   <script>
       const getLanguage = async () => {
           try {
               const response = await axios.get('language');
               response.data.forEach(element => {
                   const div = document.getElementById('language_id');
                   div.innerHTML += (`<div class="col mb-4 mb-md-0 py-2">
                                   <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${element['name']}</div>
                               </div>`)
               });
           } catch (error) {
               console.log(error);
           }
       }
       getLanguage();
   </script>
