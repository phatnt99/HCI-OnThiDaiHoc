/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow
 */

import React from 'react';
import {
  SafeAreaView,
  StyleSheet,
  ScrollView,
  View,
  Text,
  StatusBar,
} from 'react-native';

import {
  Header,
  LearnMoreLinks,
  Colors,
  DebugInstructions,
  ReloadInstructions,
} from 'react-native/Libraries/NewAppScreen';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

import { Home, Result, Document } from './components';

const KetQuaSearchStack = createStackNavigator({
  'Result': Result,
  'Document': Document
},{ headerMode: 'none' },);

const Index = createStackNavigator(
  {
    'Home': Home,
    'ResultView': KetQuaSearchStack
  },
  { headerMode: 'none' },
);

const App = createAppContainer(Index);

export default App;
