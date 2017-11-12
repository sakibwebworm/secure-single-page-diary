<template><div>
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
        <div class="row" v-for="entry in filteredList">
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
                search:''
            }

        },
        created(){
            /* axios.get('/api/search',{params: {query: this.query}}).then(({data})=>{
                 this.setData(data);
             });*/
            /*axios.get('/api/search',{params: {query: this.query}}).then(response => {
                this.results = response.data;
            });*/
            axios.get('/entries').then(({data})=>{
                this.setData(data);
            });
        },
        computed: {
            filteredList() {
                return this.entries.filter(entry => {
                    return this.searcha.title.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        },
        methods:{
            searcha(){
                axios.get('/api/search',{params: {query: this.search}}).then(({data}) => {
                    return this.entries=data.data;
                });
            },
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
                axios.get(this.nextPage).then(({data})=>{
                    this.setData(data);
                });
            },
            loadpreviouspage(){
                axios.get(this.previousPage).then(({data})=>{
                    this.setData(data);
                });
            }
        }
    }
</script>
<style></style>