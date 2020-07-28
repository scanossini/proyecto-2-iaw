import React, { Component } from 'react'
import ReactDOM from 'react-dom'

export default class Busqueda extends Component {
    render(){
        return(
            <div>
                <select name="tipoSangre" id="tipoSangre" className="form-control @error('tipoSangre') is-invalid @enderror">
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    </select>
            </div>
        )
    }
}