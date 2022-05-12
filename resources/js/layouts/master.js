import React from "react";
import ReactDOM from "react-dom";
import Navbar from "../components/Navbar";
import CarsList from "../pages/CarsList";
import CarDetails from "../pages/CarDetails";
import CalculateEmi from "../pages/CalculateEmi";
import TestDrive from "../pages/TestDrive";
import Fav from "../pages/Fav";
import PageNotFound from "../error/PageNotFound";
import { BrowserRouter ,Route, Routes } from "react-router-dom";

function App() {
    return (
        <BrowserRouter>
            <div className="container">
                <div className="row justify-content-center">
                    <Navbar />
                    <Routes>
                        <Route exact path="/" element={<CarsList />} />
                        <Route exact path="/car" element={<CarDetails />} />
                        <Route exact path="/calemi" element={<CalculateEmi />} />
                        <Route exact path="/testdrive" element={<TestDrive />} />
                        <Route exact path="/favs" element={<Fav />} />
                        <Route path="*" element={<PageNotFound />} />
                    </Routes>
                </div>
            </div>
        </BrowserRouter>
    );
}

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />,document.getElementById("app"));
}
