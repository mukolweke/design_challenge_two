<template>
    <div>
        <top_header></top_header>

        <banner></banner>

        <who_we_are></who_we_are>

        <featured_story></featured_story>

        <knowledge_support></knowledge_support>

        <conference></conference>

        <members_section></members_section>

        <banner_map></banner_map>

        <news_articles></news_articles>

        <join_message></join_message>

        <footer_section></footer_section>

    </div>
</template>

<script>
    import top_header from './HeaderOne'
    import banner from './Banner'
    import who_we_are from './WhoWeAreSection'
    import featured_story from './FeaturedStorySection'
    import knowledge_support from './SupportKnowledgeSection'
    import conference from './ConferenceSection'
    import members_section from './MembersSection'
    import banner_map from './BannerMapSection'
    import news_articles from './NewsArticlesSection'
    import join_message from './JoinMessageSection'
    import footer_section from './FooterSection'

    export default {
        name: "IndexComponent",

        components:{
            top_header,
            banner,
            who_we_are,
            featured_story,
            knowledge_support,
            conference,
            members_section,
            banner_map,
            news_articles,
            join_message,
            footer_section
        }
    }
</script>