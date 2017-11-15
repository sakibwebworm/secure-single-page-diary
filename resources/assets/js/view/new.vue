<template>
    <div>
        <section id="newentry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-heading text-uppercase text-center">Write youe entry</h2>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 text-center">
                <div id ="app" class="align-middle">
                    <form action="#" @submit.prevent="postNow">

                        <!--<div class="form-group">
                            <label for="Date">Date</label>
                            <input type="text" name="title" id="title"  >
                            <small id="emailHelp"  class="form-text text-muted"></small>
                        </div>-->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"  v-model="diary.title">
                            <small id="emailHelp" class="form-text text-muted" ></small>
                        </div>
                      <input type="hidden" name="user_id" v-model="diary.user_id" >
                        <div class="form-group">
                            <label for="entry">Body</label>
                            <textarea name="entry" id="entry" cols="30" rows="10" class="form-control" v-model="diary.entry"></textarea>
                            <small id="emailHelp"   class="form-text text-muted" ></small>
                        </div>
                        <div class="form-group">

                            <button  type="submit" class="btn btn-primary btn-xl text-uppercase" >Publish</button>
                        </div>
                    </form>


                </div>
            </div>



        </section>
    </div>

</template>

<script>


     export default {

         data() {
             return {
                 diary: {
                     title: '',
                     entry: '',
                     user_id:'3'
                 },
                 user_id:''
             };
         },

        methods: {
            postNow: function () {
                console.log(this.name);
                axios.post('api/add', this.diary).then(response=>console.log(response));
            }
           /* grabUserId: function() {

            }*/
        }
    }
</script>
