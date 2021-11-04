<template>
  <div>
    <div class="top-right links">
      <template v-if="authenticated">
        <router-link :to="{ name: 'home' }">
          {{ $t('home') }}
        </router-link>
      </template>
      <template v-else>
        <router-link :to="{ name: 'login' }">
          {{ $t('login') }}
        </router-link>
        <router-link :to="{ name: 'register' }">
          {{ $t('register') }}
        </router-link>
      </template>
    </div>

    <div class="container h-100 d-flex">
      <div class="search">
        <form action="/images/search" method="get">
          <input type="text" placeholder="text" name="q">
        </form>
        <div class="tags">
          <span class="tag" v-for="tag in tags" :key="tag.id">
            {{ tag.name }}
          </span>
          <!-- <span class="tag">#business</span> -->
          <!-- <span class="tag">#computer</span> -->
          <!-- <span class="tag">#love</span> -->
          <!-- <span class="tag">#house</span> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',

  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName,
    tags: []
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  }),

  mounted() {
    this.$api.tags.getPopularTags()
    .then(data => {

    })
  }
}
</script>

<style scoped>
.title {
  font-size: 85px;
}
</style>
