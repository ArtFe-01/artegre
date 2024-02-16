import {usePage} from '@inertiajs/react';
import ArtegreHeader from "@/Components/artegre/ArtegreHeader.jsx";
import ArtegreFooter from "@/Components/artegre/ArtegreFooter.jsx";
import PropTypes from "prop-types";

MainLayout.propTypes = {
    title: PropTypes.string.isRequired
}
export default function MainLayout({title, auth, children}) {
    const props = usePage().props;

    return (
        <div>
            <ArtegreHeader title={title}/>
            <main className="main">

                {children}
            </main>
            <ArtegreFooter/>
        </div>

    )
}
