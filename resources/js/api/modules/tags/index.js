import axios from 'axios'

export default {
    getTags(page = 1) {
      return axios.get(`/tags?page=${page}`)
    },
    getPopularTags() {
      return axios.get('/tags/popular')
    }
}
