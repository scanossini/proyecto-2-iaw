import React from 'react';
import ReactDOM from 'react-dom';

function ListDonantes() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Donantes</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ListDonantes;

if (document.getElementById('listDonantes')) {
    ReactDOM.render(<listDonantes />, document.getElementById('listDonantes'));
}
