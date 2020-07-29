import React, { Component } from 'react'
import ReactDOM from 'react-dom'
//var donantes;

export default class Busqueda extends Component {

    constructor(props) {
        super(props);
        this.state = {value: 'O-'};
        //donantes = this.props.donantesFromParent.donantes;
    
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        this.setState({value: event.target.value});
      }
  
    handleSubmit(event) {
        var tiposCompatibles = this.sangreCompatible(this.state.value);
        var arr = [];
        var i;
        for(i = 0; i < this.props.donantesFromParent.donantes.length; i++){
            if(this.props.donantesFromParent.donantes[i].donacionesDisp > 0){
                if(tiposCompatibles.includes(this.props.donantesFromParent.donantes[i].tipoSangre))
                    arr.push(this.props.donantesFromParent.donantes[i].nombre);
            }
        }
        alert(JSON.stringify(arr));
        event.preventDefault();
    }

    sangreCompatible(tipoSangre){
        var arr = [];
        switch(tipoSangre){
            case 'A+':
                arr = ['A+', 'A-', 'O+', 'O-'];
                break;
            case 'A-':
                arr = ['A-', 'O-'];
                break;
            case 'B+':
                arr = ['B+', 'B-', 'O+', 'O-'];
                break;
            case 'B-':
                arr = ['B-', 'O-'];
                break;
            case 'AB+':
                arr = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
                break;
            case 'AB-':
                arr = ['A-', 'B-', 'AB-', 'O-'];
                break;
            case 'O+':
                arr = ['O+', 'O-'];
                break;
            case 'O-':
                arr = ['O-'];
                break;
        }
        return arr;
    }

    render(){
        return(
            <div>
                <h5 className="textoBusqueda">Buscar donantes compatibles con donaciones disponibles.</h5>
                <br />
                <form onSubmit={this.handleSubmit} className="textoBusqueda">     
                    <label>           
                        Tipo de sangre del paciente a recibir la donación:
                        <select className="form-control" value={this.state.value} onChange={this.handleChange}>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </label>
                    <input type="submit" value="Buscar" />
                </form>
            </div>
        )
    }
}