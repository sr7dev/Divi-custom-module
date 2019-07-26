// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class Algolia_Hits extends Component {

  static slug = 'algolia_hits';

  render() {
    return (
    	<Fragment>
		    <h1 className="algolia-hits-header">{this.props.heading}</h1>
		    <p>
		      {this.props.content()}
		    </p>
	    </Fragment>		
    );
  }
}

export default Algolia_Hits;
