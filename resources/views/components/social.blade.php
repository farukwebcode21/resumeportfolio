 <section class="bg-light">
     <div class="container px-5">
         <div class="row gx-5 justify-content-center">
             <div class="col-xxl-8">
                 <div class="text-center mb-3">
                     <div id="social_id" class="d-flex justify-content-center fs-2 gap-4">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <script>
     const getSocialLink = async () => {
         try {
             const response = await axios.get('/social');
             response.data.forEach(element => {
                 const div = document.getElementById('social_id');
                 div.innerHTML += (`<a class="text-gradient" href="${element['twitterLink']}"><i class="bi bi-twitter"></i></a>
                         <a class="text-gradient" href="${element['githubLink']}"><i class="bi bi-linkedin"></i></a>
                         <a class="text-gradient" href="${element['linkedinLink']}"><i class="bi bi-github"></i></a>`)
             });


         } catch (error) {
             console.log(error);
         }
     }

     getSocialLink();
 </script>
