import React from 'react';
import MainLayout from "@/Layouts/MainLayout.jsx";
import {usePage} from "@inertiajs/react"; // Assuming this is your converted x-main_layout

export default function Posts({ auth, laravelVersion, phpVersion }) {
    const props = usePage().props;
    const { allPosts } = props;
    return (
        <MainLayout title="Posts">
            <div className="posts-container">
                {allPosts && allPosts.map((post, index) => (
                    <article key={post.id} className="post">
                        <h2>{post.title}</h2>
                        <p>{post.excerpt}</p>
                        <a href={route('posts.show', { post: post.id })} className="read-more">Read More</a>
                    </article>
                ))}
            </div>
        </MainLayout>
    );
}
