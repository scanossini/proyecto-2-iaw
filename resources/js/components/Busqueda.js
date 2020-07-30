import React, { Component } from 'react'

export default class Busqueda extends Component {
 
    constructor(props) {
        super(props);
        this.state = {value: 'O-', hayResultados: 'false', arrResult: []};
    
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
        if(arr.length > 0){
            this.setState({hayResultados: 'true', arrResult: arr});
        }
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
        const hayResultados = this.state.hayResultados;
        let divResult;
        if(hayResultados == 'true'){
            divResult = (
                <ul> Donantes compatibles: <br />
                    {this.state.arrResult.map(function(item, index) {
                    return(
                        <li key={index}>
                            {item}
                        </li>
                    )
                    })}
                </ul>
            );
        }        
        else
            divResult = (<div></div>);
        return(
            <div>
                <h5 className="textoBusqueda">Buscar un donante <br /> (además de un tipo de sangre compatible 
                debe tener donaciones disponibles).</h5>
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
                    {divResult}
                </form>
            </div>
        )
    }
}