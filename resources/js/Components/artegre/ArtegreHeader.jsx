import ArtegreMenu from "@/Components/artegre/ArtegreMenu.jsx";
import PropTypes from 'prop-types';

ArtegreHeader.propTypes = {
    title: PropTypes.string.isRequired
}
export default function ArtegreHeader ({title }) {
    return (
        <div className="header">
            <h1>ArtEgre</h1>
            <h2>{title}</h2>
            <ArtegreMenu/>
        </div>
    );
}

