import { Link } from 'react-router-dom';

function CarDetails() {
    return (
        <>
            <div className="container mt-5 mb-5">
                <div className="card">
                    <div className="row g-0">
                        <div className="col-md-6 border-end">
                            <div className="d-flex flex-column justify-content-center">
                                <div className="main_image"> <img src="https://i.imgur.com/TAzli1U.jpg" id="main_product_image" style={{width:"350px"}} /> </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="p-3 right-side"><br />
                                <div className="d-flex justify-content-between align-items-center">
                                    <h3>Car Name</h3>
                                    <button className="btn btn-white btn-default"><i className="fa fa-heart" style={{color:"red"}}></i></button>
                                </div>
                                <div className="mt-2 pr-3 content">
                                    <p>Description</p>
                                </div>
                                <h3>Rs. 25000/-</h3>
                                <div>Views: 2000</div>
                                <div>Likes: 200</div>
                                <div className="buttons d-flex flex-row mt-5 gap-3"> <Link className="btn btn-outline-dark" to="/calemi">Calculate EMI</Link>  <Link to="/testdrive">Test Drive</Link> </div> <br/>
                                <strong>highlights</strong>
                                <ul>
                                    <li>
                                        Key : Value
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default CarDetails;
