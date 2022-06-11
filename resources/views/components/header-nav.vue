<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3'

</script>

<template>
        <nav class="flex">
            <Link class="mt-auto mb-auto flex" 
                href="">
                <img class="mt-auto mb-auto" src="@/images/login_icon.png" alt="LoginIcon" />
                <p class="mt-auto mb-auto pl-2 text-xl">Login</p>
            </Link>

            <div class="flex ml-auto text-xl pl-16">
                <Link class="m-auto pl-40" href="/taarten">Taarten</Link>
                <Link class="pl-10 m-auto" href="/gebak">Gebak</Link>
                <Link class="pl-10 m-auto" href="/vlaaien">Vlaaien</Link>
            </div>

            <img class="ml-auto pt-2 pb-2" src="@/images/search-icon.png" alt="SearchIcon" />
            <form class="search mt-auto mb-auto pr-5 pl-5" action="">
                <input class="search-bar " type="text" placeholder="">
            </form>
        </nav>

        <Link  
            href="/">
            <img class="header" src="@/images/header-bg.png" alt="HeaderBackground" />
        </Link>
</template>

<style>
    .header {
        width: 100vw;
    }
    nav {
        position: fixed;
        background-color: white;
        opacity: 85%;
        width: 100vw;
        min-height: 10vh;
        border-bottom: 1px solid black;
    }
    .search-bar {
        width: 11vw;
        height: 3vh;
        border: 2px solid black;
        border-radius: 15px;
        outline: none;
    }
</style>