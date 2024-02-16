const ArtegreMenu = () => {

    const menuLinks = [
        { url: route('home'), label: 'Home'},
        { url: route('page__about'), label: 'About'},
        { url: route('posts.index'), label: 'Posts'},
        { url: route('page__doctrine'), label: 'Doctrine'},
        { url: route('page__contact'), label: 'Contact'},
        { url: route('dashboard'), label: 'My Account'},
    ];

    return (
        <nav>
            {
                menuLinks.map((link, index) => (
                 <a key={`link_${index}`} href={link.url}>{link.label}</a>
                ))
            }
        </nav>
    );
}

export default ArtegreMenu;
