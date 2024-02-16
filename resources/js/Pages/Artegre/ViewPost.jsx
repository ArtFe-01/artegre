import {Link, Head, usePage} from '@inertiajs/react';
import ArtegreLayout from "@/Layouts/ArtegreLayout.jsx";
import MainLayout from "@/Layouts/MainLayout.jsx";


export default function ViewPost({auth, laravelVersion, phpVersion}) {

    const props = usePage().props;
    const {post} = props;

    return (
        <MainLayout
            title={post.title}
        >

            <div className="post">

                <h1 className="post__title">{post.title}</h1>
                <p className="post-content">{post.content}</p>
            </div>

        </MainLayout>
    )
}
