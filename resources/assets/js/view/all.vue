<template><div>
    <section id="newentry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading text-uppercase text-center">Write Your Entries</h2>
                </div>

                <div class="col-lg-12 text-center">
                    <div id ="app" class="align-middle">
                        <div class="box_all_entry">
                            <div class="container">

                                <div class="col-lg-3 ">
                                    <ul class="pagination">
                                        <button class="page-item" :disabled ="disablePrevious()"  @click="loadpreviouspage">Previous</button>
                                        <span>Page {{ currentPage }} of {{ totalPage }}</span>
                                        <button class="page-item" :disabled ="disableNext()"   @click="loadnextpage">Next</button>
                                    </ul>
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="text" v-model="search" placeholder="Search by title.."/>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control" id="sel1" v-model="numberofEntries">
                                        <option selected>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>50</option>
                                    </select>
                                </div>
                                <div class="box_content">
                                    <div class="row" >
                                        <div class="col-md-3">
                                            Date
                                        </div>
                                        <div class="col-md-6">
                                            Title
                                        </div>
                                        <div class="col-md-3">
                                            Actions
                                        </div>
                                    </div>
                                </div>
                                <div class="box_content">
                                    <div class="row" v-model="entries" v-for="entry in entries">
                                        <div class="col-md-3">
                                            {{postedOn(entry)}}
                                        </div>
                                        <div class="col-md-6">
                                            {{entry.title}}
                                        </div>
                                        <div class="col-md-3">
                                            {{entry.entry}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
</template>

<script>
    import moment from 'moment';

    export default {

        data(){
            return {
                entries:[],
                currentPage:'',
                totalPage:'',
                nextPage:'',
                previousPage:'',
                search:'',
                numberofEntries:10
            }

        },
        created(){
           /* axios.get('/api/search',{params: {query: this.query}}).then(({data})=>{
                this.setData(data);
            });*/
            /*axios.get('/api/search',{params: {query: this.query}}).then(response => {
                this.results = response.data;
            });*/
            axios.get('/entries',{params: {number: this.numberofEntries}}).then(({data})=>{
                this.setData(data);
            });
    },

watch:{
    search: function(val){

        axios.get('/searchentries', {params: {query: this.search}}).then(({data})=>{
            this.entries=data;
        });
    },
    numberofEntries: function(val){
        axios.get('/entries',{params: {number: this.numberofEntries}}).then(({data})=>{
            this.setData(data);
        });
    }
},
        methods:{
            disableNext(){
                if(this.nextPage){
                    return false;
                }
                return true;
            },
            disablePrevious(){
                if(this.previousPage)
                {
                    return false;
                }
                return true;
            },
            setData(data){
                this.entries=data.data;
                this.currentPage=data.current_page;
                this.totalPage=data.last_page;
                this.nextPage=data.next_page_url;
                this.previousPage=data.prev_page_url;
            },
            postedOn(entries){
                return moment(entries.created_at).fromNow();
            },
            loadnextpage(){
                axios.get('/entries',{params: {
                    number: this.numberofEntries,
                    page:this.currentPage+1
                }})
                    .then(({data})=>{
                    this.setData(data);
                });
            },
            loadpreviouspage(){
                axios.get('/entries',{params: {
                    number: this.numberofEntries,
                    page:this.currentPage-1
                }})
                    .then(({data})=>{
                        this.setData(data);
                    });
            }
        }
    }
</script>
<style>
    .expand-transition {
        transition: all .3s ease;
        height: 30px;
        padding: 10px;
        background-color: #eee;
        overflow: hidden;
    }

    .expand-enter, .expand-leave {
        height: 0;
        padding: 0 10px;
        opacity: 0;
    }
</style>