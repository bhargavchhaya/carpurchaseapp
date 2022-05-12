import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

function CarPreview(){
    return(
        <>
            <div className="col-md-3">
                <div className="card">
                    <div className="card-header">
                        <h5 className="d-flex justify-content-between align-items-center">Car Name <Link to="/favs" className="btn btn-white btn-default"><i className="fa fa-heart-o" style={{color:"red"}}></i></Link></h5>
                    </div>
                    <div className="card-body">
                        <img src="https://via.placeholder.com/350x200" alt="" className="img-fluid" />
                    </div>
                    <div className="card-footer">
                        <p>Rs. 25000/-</p>
                        <p>Brief Description</p>
                        <Link to="/car">Details</Link>
                        <Link to="/testdrive">Test Drive</Link>
                    </div>
                </div>
            </div>
        </>
    );
}

export default CarPreview;
