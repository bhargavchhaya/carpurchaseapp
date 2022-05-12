import { Link } from 'react-router-dom';

function Navbar(){
    return (
        <>
            <nav className="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div className="container">
                    <Link className="navbar-brand" to="/">Cars</Link>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav me-auto">

                        </ul>

                        <form className="d-flex">
                            <input className="form-control me-2" type="search" placeholder="Search by brand, model, fuel type"
                                aria-label="Search" style={{width:"400px"}} />
                            <button className="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <ul className="navbar-nav ms-auto">
                                    <li className="nav-item">
                                        <Link className="nav-link" to="/login">Login</Link>
                                    </li>
                                    <li className="nav-item">
                                        <Link className="nav-link" to="/register">Sign Up</Link>
                                    </li>
                                <li className="nav-item dropdown">
                                    <Link id="navbarDropdown" className="nav-link dropdown-toggle" to="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Username
                                    </Link>

                                    <div className="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <Link className="dropdown-item" to="/logout">
                                            Logout
                                        </Link>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" className="d-none">
                                        </form>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </>
    );
}

export default Navbar;
