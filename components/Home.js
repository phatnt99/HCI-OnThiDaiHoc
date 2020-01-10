import React, { Component } from 'react';
import { View, Text, StyleSheet, TouchableOpacity } from 'react-native';
import { Button, Icon, Footer, FooterTab } from 'native-base';
import Search from './Search';
import Forum from './Forum';
export default class Home extends Component {
  constructor(props) {
    super(props);
    this.state = {
      index: 0
    };
  }

  _renderTab() {
    switch (this.state.index) {
      case 0:
        return <Search />
        break;
      case 1:
        return <Forum />
        break;
      case 2:

        break;
      default:
        break;
    }
  }

  render() {
    return (
      <View style={styles.container}>
        <View style={styles.body}>
          {this._renderTab()}
        </View>
        <View>
          <Footer
          style={{
            backgroundColor: 'white',
            elevation: 3
          }}>
            <FooterTab
            style={{
              backgroundColor: 'white',
              elevation: 20
            }}>
              <Button
                onPress={() => {
                  this.setState({
                    index: 0
                  })
                }}>
                <Icon name="ios-search" style={this.state.index == 0 ? { color: '#00817C' } : { color: '#C4C4C4' }} />
              </Button>
              <Button
                onPress={() => {
                  this.setState({
                    index: 1
                  })
                }}>
                <Icon name="ios-chatboxes" style={this.state.index == 1 ? { color: '#00817C' } : { color: '#C4C4C4' }} />
              </Button>
              <Button
                onPress={() => {
                  this.setState({
                    index: 2
                  })
                }}>
                <Icon name="ios-person" style={this.state.index == 2 ? { color: '#00817C' } : { color: '#C4C4C4' }} />
              </Button>
            </FooterTab>
          </Footer>
        </View>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1
  },
  bar: {
    //flex: 1,
    flexDirection: 'row',
    //justifyContent: 'space-around',
    alignItems: 'flex-end',
    backgroundColor: '#00817C'
  },
  body: {
    flex: 9,
  },
  itemBar: {
    flex: 2.5,
    paddingTop: 10,
    paddingBottom: 10,
    alignItems: 'center',
    //elevation: 30
  }
});
