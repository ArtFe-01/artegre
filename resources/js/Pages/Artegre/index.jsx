import {Link, Head, usePage} from '@inertiajs/react';
import ArtegreLayout from "@/Layouts/ArtegreLayout.jsx";
import MainLayout from "@/Layouts/MainLayout.jsx";

const QuoteBoxComponent = ({quote, author}) => {
    return (
        <div className="quote-box">
            "{quote}"
            <span className="quote-author">- {author}</span>
        </div>
    )
}

export default function Main({auth, laravelVersion, phpVersion}) {

    const props = usePage().props;
    const {quote, author, latestPosts} = props;

    return (
        <MainLayout
            title={'Home'}
        >
            <QuoteBoxComponent
                quote={quote}
                author={author}
            />

            <div className="featured-posts">
                <h2>Featured Posts</h2>
                <div className="posts-grid">
                    {
                        latestPosts.map((post, index) =>
                            <div className="post">

                                <h3 className="post-title">{post.title}</h3>
                                <p className="post-excerpt">{post.excerpt}</p>
                                <a href={route('posts.show', {post: post.id})} className="read-more">Read More</a>
                            </div>
                        )
                    }
                </div>
            </div>

        </MainLayout>
    )
}
