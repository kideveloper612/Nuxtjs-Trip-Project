<template>
    <div>

        <Banner :background="'/images/sok-head-bg.png'"
                :title="'Sökresultat'"
                :subtitle="'Du sökte efter &quot; ' + searchphrase + ' &quot;'" />

        <div class="container-fluid top-section">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row">
                    <Sidebar />

                    <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
                    <div class="col-xxl-10 col-xl-9 col-lg-9 col-12">
                        <div class="content-padding-top">
                            <Result v-for="(result, index) in results"
                                    v-if="(index < resultsInPage) && (index >= (resultsInPage - 10))"
                                    :key="index"
                                    :result="result"/>

                            <div class="searchresult-navi">
                                <button v-if="resultsInPage > 10" @click="resultsInPage = resultsInPage - 10" class="btn-blue"><< Previous</button>
                                <button v-if="resultsInPage < results.length" @click="resultsInPage = resultsInPage + 10" class="btn-blue">Next >></button>
                            </div>
                        </div>
                    </div>
                    <!-- END AVAILABLE POSITIONS CONTENT -->

                </div>
            </div>
        </div>

    </div>
</template>

<script>
  import axios from 'axios'
  import Sidebar from '~/components/Sidebar.vue'
  import Banner from '~/components/Banner.vue'
  import Result from  '~/components/Search/Result.vue'

  export default {
    head () {
      return {
        title: 'Sök: ' + this.searchphrase + process.env.metaTitleSuffix,
      }
    },
    asyncData ({ params, error, store }) {
      return axios.get('/search?needle='+params.searchphrase)
        .then((res) => {
          return {
            results: res.data,
            searchphrase: params.searchphrase
          }
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Post not found' })
        })
    },
    components: {
      Sidebar,
      Banner,
      Result
    },
    data() {
      return {
        resultsInPage: 10
      }
    }
  }
</script>

<style lang="scss" scoped>
    .searchresult-navi {
        display: flex;
        justify-content: center;
        margin: 10px 0;

        button {
            margin: 5px;
            padding: 5px 20px;
        }
    }
</style>
